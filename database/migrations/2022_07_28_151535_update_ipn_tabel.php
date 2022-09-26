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
        Schema::table('ipns', function (Blueprint $table) {
//  `          $table->string('currency1')->nullable()->change();
//            $table->string('currency2')->nullable()->change();
//            $table->string('amount1')->nullable()->change();
//            $table->string('amount2')->nullable()->change();`

            $table->foreignId('item_name')
                ->nullable()
                ->change()
                ->constrained('tariffs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ipns', function (Blueprint $table) {
            //
        });
    }
};
