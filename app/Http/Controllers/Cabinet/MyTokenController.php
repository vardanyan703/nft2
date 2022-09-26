<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Crypto;
use App\Models\Tariff;
use App\Models\UserTariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kevupton\LaravelCoinpayments\Models\Transaction;

class MyTokenController extends Controller
{
    public function index()
    {
        $tokens = UserTariff::query()->with('tariff')->where('user_id', Auth::id())->latest()->get();

        $tariffs = Tariff::query()
            ->where('published', 1)
            ->get();

        $cryptos = Crypto::query()->orderBy('order','ASC')->with('user',function ($q){
            return $q->where('user_id',Auth::id());
        })->get();
        return view('cabinet.my-tokens.index', compact('tokens','tariffs','cryptos'));
    }
}
