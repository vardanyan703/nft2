<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Kevupton\LaravelCoinpayments\Events\Withdrawal\WithdrawalComplete as WithdrawalCompleteAlias;

class WithdrawalComplete
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
     * @param WithdrawalComplete $event
     * @return void
     */
    public function handle(WithdrawalComplete $event)
    {
        Log::info(print_r('WithdrawalComplete',true));
        Log::info(print_r($event,true));
    }
}
