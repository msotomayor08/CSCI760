<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {

            $table->bigIncrements('contract_no')->unique();
            $table->bigInteger('supplier_no');
            $table->date('date_of_contract');
            $table->rememberToken();
            $table->timestamps();

            //foreign key
            $table->foreign('contract_no')->references('contract_no')->on('to_supply');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
