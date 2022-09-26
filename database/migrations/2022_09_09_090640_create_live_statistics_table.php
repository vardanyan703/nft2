<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_statistics', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nft_holders_start')->default(17328);
            $table->bigInteger('nft_holders_end')->default(17328 + 250);

            $table->bigInteger('investment_pool_start')->default(34121090);
            $table->bigInteger('investment_pool_end')->default(34121090 + 300000);

            $table->bigInteger('total_profit_start')->default(21972310);
            $table->bigInteger('total_profit_end')->default(21972310 + 200000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_statistics');
    }
};
