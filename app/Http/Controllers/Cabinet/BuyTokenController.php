<?php

namespace App\Http\Controllers\Cabinet;

use App\Facades\CryptoFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\BuyTokenRequest;
use App\Http\Requests\ConfirmPaymnetRequest;
use App\Http\Requests\PayFromBalanceRequest;
use App\Models\ApiKey;
use App\Models\Crypto;
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

        return redirect()->to($transaction['status_url']);
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
}
