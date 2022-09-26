<?php

namespace Database\Seeders;

use App\Models\ApiKey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApiKey::query()->create([
           'public_key' => 'd18d3683eacbcd3b45cd7956e16ffc3712cc490fa18226c3c599a4b5e5102cb9',
           'private_key' => '86A476c43ee62fE399615bc047D642F67e9efa7Cf9A4f180a1CE7D447cdBC2b9',
           'ipn_secret' => 'LQouJCwYv5U9UY7JK0uu',
           'ipn_url' => 'http://135.181.125.159/api/ipn',
           'marchant_id' => '8ad253bd4e41b550d3608060beec2723',
        ]);
    }
}
