<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'affiliate_percent' => [
             'level_1' => 5,
             'level_2' => 3,
             'level_3' => 1,
             'level_4' => 1,
          ]
        ];

//        dd($dat);

        Setting::query()->create($data);
    }
}
