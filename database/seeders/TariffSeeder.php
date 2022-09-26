<?php

namespace Database\Seeders;

use App\Models\Tariff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Orchid\Attachment\File;

class TariffSeeder extends Seeder
{
   /**
    * @throws \League\Flysystem\FilesystemException
    */
    public function run()
    {

//        DB::table('tariffs')->truncate();
       $data = [
          [
             'published' => 1,
             'name' => 'Digital 112% after 24 hours. Min 10 Maх 20$ Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Digital',
             'token_bid' => 112,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 10,
             'max_price' => 20,
          ],
          [
             'published' => 1,
             'name' => 'Paddy 114% after 24 hours. Min 20 Maх 30$ Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Paddy',
             'token_bid' => 114,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 20,
             'max_price' => 30,
          ],
          [
             'published' => 1,
             'name' => 'Rasta 116% after 24 hours. Min 30 Maх 50$ Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Rasta',
             'token_bid' => 116,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 30,
             'max_price' => 50,
          ],
          [
             'published' => 1,
             'name' => 'Volcano 118% after 24 hours. Min 40 Maх 100$ Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Volcano',
             'token_bid' => 118,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 40,
             'max_price' => 100,
          ],
          [
             'published' => 1,
             'name' => 'Cerberus 120% after 24 hours. Min 50 Maх 200$ Open. Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Cerberus',
             'token_bid' => 120,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 50,
             'max_price' => 200,
          ],
          [
             'published' => 1,
             'name' => 'Ferocious 122% after 24 hours. Min 70 Maх 400$ Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Ferocious',
             'token_bid' => 122,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 70,
             'max_price' => 400,
          ],
          [
             'published' => 1,
             'name' => 'Eduardo 124% after 24 hours. Min 90 Maх 800$ Open. Allowed to buy a token 1 time every 24 hours',
             'home_page_name' => 'Eduardo',
             'token_bid' => 124,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 90,
             'max_price' => 800,
          ],
          [
             'published' => 1,
             'name' => 'Green Beast 126% after 24 hours. Min 100 Maх 1500$ Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Green Beast',
             'token_bid' => 126,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 100,
             'max_price' => 1500,
          ],
          [
             'published' => 1,
             'name' => 'Elvis 128% after 24 hours. Open. Allowed to buy a token 1 time every 24h',
             'home_page_name' => 'Elvis',
             'token_bid' => 128,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 150,
             'max_price' => 3000,
          ],
          [
             'published' => 1,
             'name' => 'BOSS - 130% after 24 hours. Min 1000 Maх 10000$ Open',
             'home_page_name' => 'Trendy',
             'token_bid' => 130,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 200,
             'max_price' => 6000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Storm',
             'token_bid' => 132,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 300,
             'max_price' => 10000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Robber',
             'token_bid' => 134,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 400,
             'max_price' => 20000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Everest',
             'token_bid' => 136,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 500,
             'max_price' => 30000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'VIP Rasta',
             'token_bid' => 138,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 1000,
             'max_price' => 50000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Phantom',
             'token_bid' => 140,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 2000,
             'max_price' => 100000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'NFT detective',
             'token_bid' => 142,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 2000,
             'max_price' => 100000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Gods money',
             'token_bid' => 144,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 2000,
             'max_price' => 100000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Coffeemania',
             'token_bid' => 144,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 2000,
             'max_price' => 100000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Amazy Dreamer',
             'token_bid' => 144,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 2000,
             'max_price' => 100000,
          ],
          [
             'published' => 0,
             'name' => 'Title',
             'home_page_name' => 'Monkey Boss',
             'token_bid' => 144,
             'interval' => 24,
             'period' => 24,
             'deposit' => 'included',
             'min_price' => 2000,
             'max_price' => 100000,
          ],
       ];



       foreach ($data as $key => $item) {
          $file = new UploadedFile(public_path('tmp/plan_'.$key+1 .'.png'),'plan_'. $key+1 .'.png');
          $attachment = (new File($file))->load();

          $tariff = Tariff::create($item);
          $tariff->attachment()->sync($attachment->id);
       }
    }
}
