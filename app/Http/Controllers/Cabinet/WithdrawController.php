<?php

namespace App\Http\Controllers\Cabinet;

use App\Facades\CryptoFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\WithdrawRequest;
use App\Jobs\CreateWithdraw;
use App\Models\Crypto;
use App\Models\WithdrawQuestion;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index(){
        $cryptos = Crypto::query()->orderBy('order','ASC')->with(['user' => function($query){
            return $query->where('user_id',auth()->id());
        }])->get();
        $withdraws = WithdrawQuestion::query()->where('user_id',auth()->id())->latest()->get();
        return view('cabinet.withdraw.index',compact('cryptos','withdraws'));
    }

    public function create(WithdrawRequest $request){
        $user = auth()->user()->load(['wallet_address' => function($q) use($request){
            return $q->whereHas('crypto',function ($crQuery) use ($request){
                return $crQuery->where('network',$request->wallet_type);
            });
        }]);

        if(!$user->wallet_address){
            return back()->with('message',"Please specify ".$request->wallet_type." address in \"Settings\" for withdrawal");
        }

        $status = $request->status;
        $api = true;

        if($user->hasAccess('platform.payment.affiliate')){
            $status = 3;
        }

        $crypto_amount = number_format(CryptoFacade::xChangeToUSDT($request->m_amount,'USD',$request->wallet_type),4);

        $withdraw = WithdrawQuestion::query()->create([
            'network' => $request->wallet_type,
            'amount' => $crypto_amount,
            'address' => $user->wallet_address->wallet_number,
            'tag' => $user->wallet_address->tag,
            'status' => $status,
            'user_id' => auth()->id()
        ]);

        dispatch(new CreateWithdraw($withdraw));

        return back();
    }
}
