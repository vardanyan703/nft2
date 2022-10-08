<?php

namespace App\Listeners;

use App\Events\PaymentCallbackEvent;
use App\Facades\CryptoFacade;
use App\Jobs\AffiliatePercentJob;
use App\Models\Crypto;
use App\Models\Tariff;
use App\Models\User;
use App\Models\UserTariff;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Kevupton\LaravelCoinpayments\Events\Transaction\TransactionComplete;

class OnTransactionComplete
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
     * @param TransactionComplete $event
     * @return void
     */
    public function handle(TransactionComplete $event)
    {
        Log::info("\n>>\tTRANSACTION COMPLETED");
        Log::info(print_r($event->transaction,true));
        cp_log($event->transaction->toArray(), 'TRANSACTIONЬCOMPLETED', \Kevupton\LaravelCoinpayments\Models\Log::LEVEL_ALL);

        // 99999 это попалнения балансе
        if($event->transaction['item_name'] === 99999){
            $received_amount = $event->transaction['received_amount'];

            $user = User::updateOrAttachCryptoByDeposit($event->transaction['buyer_name'],$received_amount,$event->transaction['currency1']);
        }else{
            $received_amount = $event->transaction['received_amount'];
            // api xchange
            $usdt = CryptoFacade::xChangeToUSDT($received_amount,$event->transaction['currency1']);

            $user = User::updateOrAttachCrypto($event->transaction['buyer_name'],$received_amount,$event->transaction['currency1']);

            $tariff = Tariff::query()->where('id',$event->transaction['item_name'])->first();

            $user->tariffs()->attach($event->transaction['item_name'],[
                'txn_id' => $event->transaction['txn_id'],
                'network' => $event->transaction['currency1'],
                'deposit' => $received_amount,
                'total_deposit' => $received_amount * $tariff->token_bid / 100,
                'status' => UserTariff::START,
                'created_at' => now(),
                'updated_at' => now(),
                'stop_at' => now()->addHours($tariff->period)
            ]);
        }

        event(new PaymentCallbackEvent($event->transaction['buyer_name'],$event->transaction['txn_id']));
        dispatch(new AffiliatePercentJob($event->transaction['buyer_name'],$usdt));
    }
}
