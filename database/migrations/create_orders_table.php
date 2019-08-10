<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_no')->unique();
            $table->bgiInt('contract_no');
            $table->bgiInt('project_no');
            $table->date('date_required');
            $table->date('date_completed');
            $table->rememberToken();
            $table->timestamps();

            //foreign key
            $table->foreign('order_no')->references('order_no')->on('made_of');
            $table->foreign('order_no')->references('order_no')->on('to_supply');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
