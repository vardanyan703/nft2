<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Kevupton\LaravelCoinpayments\Events\Withdrawal\WithdrawalUpdated as WithdrawalUpdatedAlias;

class WithdrawalUpdated
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
     * @param WithdrawalUpdatedAlias $event
     * @return void
     */
    public function handle(WithdrawalUpdatedAlias $event)
    {

    }
}
