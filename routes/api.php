<?php

use App\Jobs\AffiliatePercentJob;
use App\Models\Crypto;
use App\Models\User;
use App\Models\UserTariff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('ipn',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'validateIpn']);

Route::post('test', function () {

        dd(\Carbon\Carbon::now());
        //dispatch(new AffiliatePercentJob('test3',10));
        return 1;
//    $user = User::query()->where('name','test1')->first();
//    $user->tariffs()->attach(1,[
//        'txn_id' => 3243243243243,
//        'network' => 'XRP',
//        'deposit' => 50,
//        'status' => UserTariff::START,
//        'created_at' => now(),
//        'updated_at' => now(),
//        'stop_at' => now()->addDay()
//    ]);
    //\Illuminate\Support\Facades\Log::info(print_r(\Kevupton\LaravelCoinpayments\Facades\Coinpayments::getRates(false,2),true));
    //dispatch(new AffiliatePercentJob('test4',500));
    broadcast(new \App\Events\PaymentCallbackEvent('test1'));
    return true;
});

