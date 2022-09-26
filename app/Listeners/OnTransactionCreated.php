<?php

namespace App\Listeners;

use App\Events\PaymentCallbackEvent;
use Kevupton\LaravelCoinpayments\Events\Transaction\TransactionCreated;

class OnTransactionCreated
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
     * @param TransactionCreated $event
     * @return void
     */
    public function handle(TransactionCreated $event)
    {
        event(new PaymentCallbackEvent($event->transaction['buyer_name']));
    }
}
