<?php

namespace Database\Seeders;

use App\Models\VideoReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           [
              'title' => 'PROFIHAIP INVEST',
              'link' => 'https://www.youtube.com/embed/w04CqcStmgA',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Boybtc Crypto Investments',
              'link' => 'https://www.youtube.com/embed/CBEcZ4RbRfc',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'ARTHUR RATNER',
              'link' => 'https://www.youtube.com/embed/vpa7tdHGgmI',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Миллионерный Миллиардер',
              'link' => 'https://www.youtube.com/embed/XzXUTm4USkY',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Домашний Инвестор',
              'link' => 'https://www.youtube.com/embed/fMuQuxKV2C8',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'E-Invest.Biz',
              'link' => 'https://www.youtube.com/embed/7JJUhNPMsJE',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Crypto Sagittarius',
              'link' => 'https://www.youtube.com/embed/n2zwzob350I',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Artur Knows',
              'link' => 'https://www.youtube.com/embed/0xfEr1bbU2Q',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Revenus Crypto',
              'link' => 'https://www.youtube.com/embed/KU9sgjzoHnE',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Lord Borg',
              'link' => 'https://www.youtube.com/embed/em376FzwVfA',
              'created_at' => now(),
              'updated_at' => now(),
           ],
           [
              'title' => 'Kripto Kumbarasi',
              'link' => 'https://www.youtube.com/embed/TXCFLY7VUyI',
              'created_at' => now(),
              'updated_at' => now(),
           ],








        ];

        VideoReview::query()->insert($data);
    }
}
