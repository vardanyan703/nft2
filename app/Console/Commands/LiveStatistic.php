<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LiveStatistic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:live-statistic';

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
        $live = \App\Models\LiveStatistic::query()->first();

        $nft_holder = rand(1000,1500) + $live->nft_holders_end;
        $investment_pool = rand(250000,300000) + $live->investment_pool_end;
        $total_profit = rand(100000,200000) + $live->total_profit_end;


        $live->update([
            'nft_holders_start' => $live->nft_holders_end,
            'nft_holders_end' => $nft_holder,

            'investment_pool_start' => $live->investment_pool_end,
            'investment_pool_end' => $investment_pool,

            'total_profit_start' => $live->total_profit_end,
            'total_profit_end' => $total_profit,

        ]);

        return 0;
    }
}
