<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createToSupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_supply', function (Blueprint $table) {
            $table->bigIncrements('item_no')->unique();
            $table->bigInteger('contract_no');
            $table->double('contract_price', 8, 2);
            $table->decimal('contract_amount', 8, 2);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_supply');
    }
}
