<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addsales', function (Blueprint $table) {
            $table->id();
            $table->integer('invoiceid');
	        $table->string('customer');
	        $table->double('totalamount');
	        $table->string('paymentmethod');
	        $table->string('payterm');
            $table->string('paymentstatus');
            $table->string('sellstatus');
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
        Schema::dropIfExists('addsales');
    }
}
