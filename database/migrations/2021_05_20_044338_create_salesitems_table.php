<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesitems', function (Blueprint $table) {
            $table->id();
            $table->integer('invoiceid');
            $table->string('productname')->nullable;
            $table->integer('quantity');
            $table->double('price');
            $table->double('totalamount')->nullable;
	        
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
        Schema::dropIfExists('salesitems');
    }
}
