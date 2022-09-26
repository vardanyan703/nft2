<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \Kevupton\LaravelCoinpayments\Events\Transaction\TransactionUpdated::class => [
            \App\Listeners\OnTransactionUpdated::class, // your own class listener for when a deposit is created
        ],
        \Kevupton\LaravelCoinpayments\Events\Transaction\TransactionComplete::class => [
            \App\Listeners\OnTransactionComplete::class, // your own class listener for when a deposit is created
        ],

        \Kevupton\LaravelCoinpayments\Events\Withdrawal\WithdrawalUpdated::class => [
            \App\Listeners\WithdrawalUpdated::class, // your own class listener for when a deposit is created
        ],

        \Kevupton\LaravelCoinpayments\Events\Withdrawal\WithdrawalComplete::class => [
            \App\Listeners\WithdrawalComplete::class, // your own class listener for when a deposit is created
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
