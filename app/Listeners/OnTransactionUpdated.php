<?php

namespace App\Listeners;

use App\Events\PaymentCallbackEvent;
use Kevupton\LaravelCoinpayments\Events\Transaction\TransactionCreated;
use Kevupton\LaravelCoinpayments\Events\Transaction\TransactionUpdated;

class OnTransactionUpdated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param TransactionUpdated $event
     * @return void
     */
    public function handle(TransactionUpdated $event)
    {
        event(new PaymentCallbackEvent($event->transaction['buyer_name']));
    }
}
