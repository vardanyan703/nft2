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
//Route::get('about',[\App\Http\Controllers\PageController::class,'about'])->name('about');
//Route::get('main-news',[\App\Http\Controllers\PageController::class,'mainNews'])->name('main-news');
//Route::get('video-reviews',[\App\Http\Controllers\PageController::class,'videoReviews'])->name('video-reviews');
//Route::get('faq',[\App\Http\Controllers\PageController::class,'faq'])->name('faq');
Route::get('terms-and-conditions',[\App\Http\Controllers\PageController::class,'termsAndConditions'])->name('termsAndConditions');
Route::get('ref/{username}',[\App\Http\Controllers\ReferralController::class,'__invoke'])->middleware('referral')->name('referral');
Route::get('affiliate/presentation',[\App\Http\Controllers\PageController::class,'affiliate'])->name('affiliate');

Route::get('/password/success',[\App\Http\Controllers\PageController::class,'passwordChangeDone'])->name('passwordChangeDone');

\Illuminate\Support\Facades\Auth::routes();
Route::get('reload-captcha', [App\Http\Controllers\CaptchaServiceController::class, 'reloadCaptcha']);


Route::prefix('dashboard')->name('cabinet.')->middleware('auth')->group(function(){
   Route::get('/',[\App\Http\Controllers\Cabinet\MainController::class,'index'])->name('index');

   Route::prefix('buy-nfts')->name('buy-token.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'index'])->name('index');
     // Route::post('payment/create',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'createPayment'])->name('payment.create');
      Route::post('payment/confirm',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'confirmPayment'])->name('payment.confirm');
      Route::post('payment/balance',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'fromBalance'])->name('payment.balance');
      Route::post('payment/details',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'details'])->name('payment.details');
      Route::post('payment/top_up',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'top_up'])->name('payment.top_up');


      Route::get('payment/xchange',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'xchange'])->name('payment.xchange');
      Route::post('payment/deposit',[\App\Http\Controllers\Cabinet\BuyTokenController::class,'deposit'])->name('payment.deposit');

   });

   Route::prefix('your-tokens')->name('my-tokens.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\MyTokenController::class,'index'])->name('index');
   });

   Route::prefix('withdrawals')->name('withdraw.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\WithdrawController::class,'index'])->name('index');
      Route::post('/create',[\App\Http\Controllers\Cabinet\WithdrawController::class,'create'])->name('create');
   });

   Route::prefix('referrals')->name('referrals.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\ReferralController::class,'index'])->name('index');

      Route::prefix('statistics')->name('history.')->group(function(){
         Route::get('/',[\App\Http\Controllers\Cabinet\ReferralHistoryController::class,'index'])->name('index');
      });
   });

   Route::prefix('banner')->name('banner.')->group(function(){
      Route::get('/',[\App\Http\Controllers\Cabinet\BannerController::class,'index'])->name('index');
   });

//   Route::prefix('news')->name('news.')->group(function(){
//      Route::get('/',[\App\Http\Controllers\Cabinet\NewsController::class,'index'])->name('index');
//   });

   Route::prefix('settings')->name('my-wallets.')->group(function(){
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


