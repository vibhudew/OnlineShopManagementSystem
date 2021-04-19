<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->integer('Productid');
            $table->string('ProductName');
            $table->string('Unit');
            $table->string('Brand');
            $table->string('Category');
            $table->string('SubCategory');
            $table->double('DefaultPurchasePrice');
            $table->double('DefaultSellingPrice');
            $table->string('ProductDescription');
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
        Schema::dropIfExists('product_details');
    }
}
