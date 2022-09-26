<?php

namespace App\Providers;

use App\Models\ApiKey;
use App\Models\Crypto;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('Crypto', Crypto::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        if (Schema::hasTable('api_keys')){
            $payment_api = ApiKey::query()->latest()->first();

            app('config')->set('coinpayments.merchant_id',$payment_api->marchant_id);
            app('config')->set('coinpayments.public_key',$payment_api->public_key);
            app('config')->set('coinpayments.private_key',$payment_api->private_key);
            app('config')->set('coinpayments.ipn_url',$payment_api->ipn_url);
            app('config')->set('coinpayments.ipn_secret',$payment_api->ipn_secret);
        }

        $data = [];
        if (Schema::hasTable('settings')) {
            $data = Setting::query()->first();
        }

        View::share('affiliate_percents', array_values($data['affiliate_percent'] ?? []));
        Paginator::useBootstrapFour();
    }
}
