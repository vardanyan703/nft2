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
        Schema::table('crypto_user', function (Blueprint $table) {
            $table->double('balance')->after('deposit')->default(0);
            $table->double('earned_total')->after('balance')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('crypto_user', function (Blueprint $table) {
            $table->dropColumn('balance');
            $table->dropColumn('earned_total');
        });
    }
};
