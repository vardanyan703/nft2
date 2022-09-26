<?php

namespace App\Console\Commands;

use App\Events\MonkeyCheckEvent;
use App\Models\User;
use App\Models\UserTariff;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MonkeyCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monkey:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        UserTariff::query()->where('status',UserTariff::START)->chunkMap(function ($monkey){
            if(Carbon::make($monkey->stop_at)->lt(now()) ){
                $monkey->update([
                    'status' => UserTariff::STOP
                ]);

                $user = User::query()->where('id',$monkey->user_id)->with('cryptos')->first();

                $crypto_id = $user->cryptos->where('network',$monkey->network)->first()->id;
                $user->cryptos()
                    ->newPivotStatement()
                    ->where('id',$user->cryptos[0]->pivot->id)
                    ->where('crypto_id',$crypto_id)
                    ->update([
                        'balance' => DB::raw("balance+$monkey->total_deposit"),
                        'earned_total' => DB::raw("earned_total+$monkey->total_deposit"),
                        'deposit' => DB::raw("deposit-$monkey->deposit")
                    ]);

                broadcast(new MonkeyCheckEvent($monkey->user_id));
            }
        },200);
        return 0;
    }
}
