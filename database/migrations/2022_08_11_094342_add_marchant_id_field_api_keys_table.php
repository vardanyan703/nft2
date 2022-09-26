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
        Schema::table('api_keys', function (Blueprint $table) {
            $table->string('marchant_id')->after('private_key')->nullable();
            $table->string('ipn_url')->after('marchant_id')->nullable();
            $table->string('ipn_secret')->after('ipn_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('api_keys', function (Blueprint $table) {
            $table->dropColumn('marchant_id');
            $table->dropColumn('ipn_url');
            $table->dropColumn('ipn_secret');
        });
    }
};
