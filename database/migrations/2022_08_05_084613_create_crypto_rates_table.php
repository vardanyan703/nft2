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
        Schema::create('crypto_rates', function (Blueprint $table) {
            $table->id();
            $table->string('network');
            $table->string('is_fiat');
            $table->string('rate_btc');
            $table->string('last_update');
            $table->string('tx_fee');
            $table->string('status');
            $table->string('image');
            $table->string('accepted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypto_rates');
    }
};
