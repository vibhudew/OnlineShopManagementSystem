<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddsalespaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addsalespayments', function (Blueprint $table) {
            $table->integer('salespaymentid');
            $table->integer('invoiceid');
            $table->date('invoicedate');
            $table->double('totalamount');
            $table->string('paymentmethod');
            $table->string('paymentstatus');
            



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
        Schema::dropIfExists('addsalespayments');
    }
}
