<?php

namespace App\Console\Commands;

use App\Models\CryptoRate;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateCryptoRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crypto:update';

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
        collect(\Kevupton\LaravelCoinpayments\Facades\Coinpayments::getRates())->map(function ($crypto,$key){
            CryptoRate::query()->updateOrCreate([
                'network' => $key
            ],$crypto);
        });


        return 0;
    }
}
