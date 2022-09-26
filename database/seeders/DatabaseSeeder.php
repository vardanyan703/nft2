<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Orchid\Platform\Commands\AdminCommand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //php artisan orchid:admin admin admin@admin.com password

//        Artisan::call('orchid:admin',[
//            'admin',
//            'admin@admin.com',
//            'password'
//        ]);
//        Artisan::call(AdminCommand::class,[
//            'admin',
//            'admin@admin.com',
//            'password'
//        ]);
         \App\Models\User::factory()->create([
             'name' => 'test1',
             'email' => 'test@test.com',
             'password' => Hash::make('password'),
             'pincode' =>  Hash::make('1234'),
             'referred_by' => null
         ]);
       $this->call(TariffSeeder::class);
       $this->call(ApiKeySeeder::class);
       $this->call(VideoReviewSeeder::class);
       $this->call(NewsSeeder::class);
       $this->call(FaqSeeder::class);
       $this->call(CryptoSeeder::class);
       $this->call(SettingSeeder::class);
       $this->call(LiveStatisticSeeder::class);
    }
}
