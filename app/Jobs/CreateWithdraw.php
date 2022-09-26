<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\WithdrawQuestion;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CreateWithdraw implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private $withdrawQuestion,private $updateBalance = true)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $user = User::query()->where('id',$this->withdrawQuestion->user_id)->first();

            if($user->getBalance($this->withdrawQuestion->network)->pivot->balance < $this->withdrawQuestion->amount) return false;

            if (WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$this->withdrawQuestion->status] == 'Paid') {
                $payment = [
                    [
                        'amount' => $this->withdrawQuestion->amount,
                        'address' => $this->withdrawQuestion->address,
                        'currency' => $this->withdrawQuestion->network,
                    ],
                ];

               \Coinpayments::createMassWithdrawal($payment);

                if($this->updateBalance){
                    User::withdrawCryptosFromBalance($this->withdrawQuestion->user_id,$this->withdrawQuestion->network,$this->withdrawQuestion->amount);
                }

            }

            if(WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$this->withdrawQuestion->status] == 'Affiliate'){
                User::withdrawCryptosFromBalance($this->withdrawQuestion->user_id,$this->withdrawQuestion->network,$this->withdrawQuestion->amount);
            }
        }catch (\Exception $exception){
            Log::info(print_r($exception->getMessage(),true));
        }
    }
}
