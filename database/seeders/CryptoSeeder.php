<?php

namespace Database\Seeders;

use App\Models\Crypto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CryptoSeeder extends Seeder
{
    public $CCRRENCIES = [
        [
            'name' => 'Bitcoin',
            'network' => 'BTC',
            'image' => 'bitcoin.png'
        ],
        [
            'name' => 'Ethereum Classic (BSC Chain)',
            'network' => 'ETC.BEP20',
            'image' => 'ethereum.png'
        ],
        [
            'name' => 'Litecoin',
            'network' => 'LTC',
            'image' => 'litecoin.png'
        ],
        [
            'name' => 'Dogecoin',
            'network' => 'DOGE',
            'image' => 'dogecoin.png'
        ],
        [
            'name' => 'Dash',
            'network' => 'DASH',
            'image' => 'dash.png'
        ],
        [
            'name' => 'Zcash',
            'network' => 'ZEC',
            'image' => 'zcash.png'
        ],
        [
            'name' => 'Ripple',
            'network' => 'XRP',
            'image' => 'ripple.png'
        ],
        [
            'name' => 'TRON',
            'network' => 'TRX',
            'image' => 'tron.png'
        ],
        [
            'name' => 'Binance Coin (BEP20)',
            'network' => 'BUSD.BEP20',
            'image' => 'bnb.png'
        ],
        [
            'name' => 'Tether TRC20',
            'network' => 'USDT.TRC20',
            'image' => 'tetheromni.png'
        ],
        [
            'name' => 'Tether ERC20',
            'network' => 'USDT.ERC20',
            'image' => 'tetheromni.png'
        ],
        [
            'name' => 'Tether BEP20',
            'network' => 'USDT.BEP20',
            'image' => 'tetheromni.png'
        ],
        [
            'name' => 'Litecoin Testnet',
            'network' => 'LTCT',
            'image' => 'litecoin.png'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crypto::query()->insert($this->CCRRENCIES);
    }
}
