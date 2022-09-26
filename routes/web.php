<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('layout.app');
//});

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


Route::get('/',[\App\Http\Controllers\PageController::class,'index'])->name('home');
Route::get('about',[\App\Http\Controllers\PageController::class,'about'])->name('about');
//Route::get('main-news',[\App\Http\Controllers\PageController::class,'mainNews'])->name('main-news');
//Route::get('video-reviews',[\App\Http\Controllers\PageController::class,'videoReviews'])->name('video-reviews');
Route::get('faq',[\App\Http\Controllers\PageController::class,'faq'])->name('faq');
Route::get('rules',[\App\Http\Controllers\PageController::class,'rules'])->name('rules');
Route::get('ref/{username}',[\App\Http\Controllers\ReferralController::class,'__invoke'])->middleware('referral')->name('referral');
Route::get('affiliate/presentation',[\App\Http\Controllers\PageController::class,'affiliate'])->name('affiliate');

\Illuminate\Support\Facades\Auth::routes();
Route::get('reload-captcha', [App\Http\Controllers\CaptchaServiceController::class, 'reloadCaptcha']);


Route::prefix('cabinet')->name('cabinet.')->middleware('auth')->group(function(){
   Route::get('/',[\App\Http\Controllers\Cabinet\MainController::class,'index'])->name('index');

   Route::prefix('buy-token')->name('buy-token.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'index'])->name('index');
     // Route::post('payment/create',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'createPayment'])->name('payment.create');
      Route::post('payment/confirm',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'confirmPayment'])->name('payment.confirm');
      Route::post('payment/balance',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'fromBalance'])->name('payment.balance');
   });

   Route::prefix('my-tokens')->name('my-tokens.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\MyTokenController::class,'index'])->name('index');
   });

   Route::prefix('withdraw')->name('withdraw.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\WithdrawController::class,'index'])->name('index');
      Route::post('/create',[\App\Http\Controllers\Cabinet\WithdrawController::class,'create'])->name('create');
   });

   Route::prefix('referrals')->name('referrals.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\ReferralController::class,'index'])->name('index');

      Route::prefix('history')->name('history.')->group(function(){
         Route::get('/',[\App\Http\Controllers\Cabinet\ReferralHistoryController::class,'index'])->name('index');
      });
   });

   Route::prefix('banner')->name('banner.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\BannerController::class,'index'])->name('index');
   });

//   Route::prefix('news')->name('news.')->group(function(){
//      Route::get('/',[\App\Http\Controllers\Cabinet\NewsController::class,'index'])->name('index');
//   });

   Route::prefix('my-wallets')->name('my-wallets.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\MyWalletController::class,'index'])->name('index');
      Route::post('/store',[\App\Http\Controllers\Cabinet\MyWalletController::class,'store'])->name('store');
      Route::post('/get-user-wallet',[\App\Http\Controllers\Cabinet\MyWalletController::class,'getUserWallet'])->name('getUserWallet');
      Route::post('/update/{id}',[\App\Http\Controllers\Cabinet\MyWalletController::class,'update'])->name('update');
   });

   Route::prefix('support')->name('support.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\SupportController::class,'index'])->name('index');
      Route::post('/store',[\App\Http\Controllers\Cabinet\SupportController::class,'store'])->name('store');
   });

});


