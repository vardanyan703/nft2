<?php

namespace App\Events;

use App\Models\Crypto;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Kevupton\LaravelCoinpayments\Models\Transaction;

class PaymentCallbackEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $transaction;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(private string $name,private $transaction_txn_id,private $add = null){
        $this->transaction = Transaction::query()->where('txn_id',$transaction_txn_id)->first();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('payment-callback-'.$this->name);
    }

    public function broadcastWith(){
        $transaction = $this->transaction;
        $cryptos = Crypto::query()->get();

        $transactions = Transaction::query()->where('buyer_name', $this->name)->latest()->paginate(5);

        return [
            'html' => view('cabinet.modals.payment',compact('transaction'))->render(),
            'transaction_id' => $this->transaction->id,
            'network' => $this->transaction->currency1,
            'add' => $this->add,
            'table' => view('cabinet.buy-token.render_table',compact('transactions','cryptos'))->render()
        ];
    }
}
