<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddpurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addpurchase', function (Blueprint $table) {
            $table->id();
            $table->integer('invoiceid')->nullable;
	        $table->string('customer')->nullable;
	        $table->double('totalamount')->nullable;
	        $table->string('paymentmethod')->nullable;
	        $table->string('payterm')->nullable;
            $table->string('paymentstatus')->nullable;
            $table->string('sellstatus')->nullable;
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
        Schema::dropIfExists('addpurchase');
    }
}
