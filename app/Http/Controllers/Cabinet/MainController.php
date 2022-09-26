<?php

namespace App\Http\Controllers\Cabinet;

use App\Facades\CryptoFacade;
use App\Http\Controllers\Controller;
use App\Models\Crypto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $deposit = 0;
        $total_balance = 0;
        $withdraw = 0;
        \auth()->user()->cryptos->map(function ($crypto) use (&$deposit,&$total_balance,&$withdraw) {
            $deposit += CryptoFacade::xChangeToUSDT($crypto->pivot->deposit, $crypto->network, 'USD');
            $total_balance += CryptoFacade::xChangeToUSDT($crypto->pivot->balance, $crypto->network, 'USD');
            $withdraw += CryptoFacade::xChangeToUSDT($crypto->pivot->withdraw, $crypto->network, 'USD');
        });

        $currencies = Crypto::query()->orderBy('order','ASC')->with('user',function ($q){
            return $q->where('user_id',\auth()->id());
        })->get();


        return view('cabinet.index', [
            'geos' => Auth::user()->authentications()->orderBy('id','desc')->limit(2)->get(),
            'deposit' => $deposit,
            'currencies' => $currencies,
            'total_balance' => $total_balance,
            'withdraw' => $withdraw,
        ]);
    }
}
