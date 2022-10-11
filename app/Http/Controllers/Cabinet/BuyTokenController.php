<?php

namespace App\Http\Controllers\Cabinet;

use App\Facades\CryptoFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\BuyTokenRequest;
use App\Http\Requests\ConfirmPaymnetRequest;
use App\Http\Requests\PayFromBalanceRequest;
use App\Models\ApiKey;
use App\Models\Crypto;
use App\Models\CryptoRate;
use App\Models\Tariff;
use App\Models\User;
use App\Models\UserTariff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Kevupton\LaravelCoinpayments\Exceptions\IpnIncompleteException;
use Kevupton\LaravelCoinpayments\Models\Ipn;
use Kevupton\LaravelCoinpayments\Models\Transaction;

class BuyTokenController extends Controller
{
    public function index()
    {
        $tariffs = Tariff::query()
            ->where('published', 1)
            ->with('attachment')
            ->get();

        $cryptos = Crypto::query()->orderBy('order','ASC')->get();

        $transactions = Transaction::query()->where('buyer_name', \auth()->user()->name)->latest()->paginate(5);

        return view('cabinet.buy-token.index', compact('tariffs', 'cryptos', 'transactions'));
    }

    public function top_up(Request $request){
        $coin = CryptoRate::query()->where('network',$request->network)->firstOrFail();

        $images = Crypto::query()->whereIn('network',$coin->pluck('network'))->get()->pluck('image','network');

        return view('cabinet.modals.top-up',compact('coin','images'));
    }

    public function confirmPayment(ConfirmPaymnetRequest $request)
    {
        return $this->createPayment($request);
    }

    /**
     * @param Request $request
     *
     */
    public function createPayment(Request $request)
    {
        $token = Tariff::query()
            ->whereId($request->tarif_plan)
            ->firstOrFail();

        if (!Crypto::query()->whereNetwork($request->wallet_type)->exists()) abort(404);

        $crypto_amount = CryptoFacade::xChangeToUSDT($request->m_amount,'USD',$request->wallet_type);

        $transaction = \Coinpayments::createTransactionSimple($crypto_amount, $request->wallet_type, $request->wallet_type, [
            'buyer_email' => Auth::user()->email,
            'buyer_name' => Auth::user()->name,
            'item_name' => $token->id,
        ]);

        $transaction = Transaction::query()->where('id',$transaction['id'])->first();

        $transactions = Transaction::query()->where('buyer_name', Auth::user()->name)->latest()->paginate(5);

        $transactions->withPath(route('cabinet.buy-token.index'));

        $cryptos = Crypto::query()->get();

        return \response()->json([
                'html' => view('cabinet.modals.payment',compact('transaction'))->render(),
                'history' => view('cabinet.buy-token.render_table',compact('transactions','cryptos'))->render()
        ]);
    }

    /**
     * Handled on callback of IPN
     *
     * @param Request $request
     */
    public function validateIpn(Request $request)
    {
        Log::error(print_r('mtaaaav', true));
        Log::error(print_r($request->all(), true));

        $trans = Transaction::query()->where('txn_id', $request->txn_id)->first();

        if ($trans && ($trans->status === 100 || $trans->status === 2)) return true;

        try {
            /** @var Ipn $ipn */
            $ipn = \Coinpayments::validateIPNRequest($request);

            // if the ipn came from the API side of coinpayments merchant
            if ($ipn->isApi()) {
                /*
                 * If it makes it into here then the payment is complete.
                 * So do whatever you want once the completed
                 */

                // do something here
                // Payment::find($ipn->txn_id);
            }
            return true;
        } catch (IpnIncompleteException $e) {
            cp_log($e->getIpn()->toArray(), 'IPN_INCOMPLETE', \Kevupton\LaravelCoinpayments\Models\Log::LEVEL_ALL);
            return response($e->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }

    public function fromBalance(PayFromBalanceRequest $request){
        dd(12);
        try{

            $to_crypto = CryptoFacade::xChangeToUSDT($request->m_amount,'USD',$request->get('wallet_type'));

            DB::beginTransaction();
            \auth()->user()->tariffs()->attach($request->tarif_plan_reinvest,[
                'txn_id' => 'From Balance',
                'network' => $request->wallet_type,
                'deposit' => $to_crypto,
                'total_deposit' => $to_crypto * $request->tariff->token_bid / 100,
                'status' => UserTariff::START,
                'created_at' => now(),
                'updated_at' => now(),
                'stop_at' => now()->addHours($request->tariff->period)
            ]);

            User::updateCryptosFromBalance(\auth()->user(),$request->wallet_type,$to_crypto);

            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();

            return back()->withErrors($exception->getMessage());
        }

        return redirect()->route('cabinet.my-tokens.index');
    }

    public function deposit(Request $request){

        $usd = $request->m_amount;
        if($request->wallet_type === 'USD'){
            $coin = CryptoFacade::xChangeToUSDT($request->m_amount,$request->wallet_type,$request->to);
        }else{
            $usd = $coin = CryptoFacade::xChangeToUSDT($request->m_amount,$request->wallet_type,'USD');
        }

        if($usd < 33){
            return \response()->json([
                'error' => 'Minimum top up amount - $33'
            ],403);
        }

        $coin = $request->m_amount;

        // 99999 это попалнения балансе

        $transaction = \Coinpayments::createTransactionSimple($coin, $request->wallet_type, $request->wallet_type, [
            'buyer_email' => Auth::user()->email,
            'buyer_name' => Auth::user()->name,
            'item_name' => 99999,
        ]);

        $transaction = Transaction::query()->where('id',$transaction['id'])->first();

        $html = view('cabinet.modals.payment',compact('transaction'))->render();

        return \response()->json($html);


    }

    public function details(Request $request){
        $transaction = Transaction::query()->where('id',$request->get('id'))->firstOrFail();
        return view('cabinet.modals.payment',compact('transaction'));
    }

    public function xchange(Request $request){

        $x = CryptoFacade::xChangeToUSDT($request->m_amount,$request->wallet_type,$request->to);
        if($request->to == 'USD'){
            return floor($x);
        }

        return number_format($x,5);

    }
}
