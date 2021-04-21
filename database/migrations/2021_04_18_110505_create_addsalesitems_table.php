<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddsalesitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addsalesitems', function (Blueprint $table) {
            $table->integer('itemid');
            $table->string('product');
            $table->integer('quantity');
            $table->double('unitcost');
            $table->double('discount');
            $table->double('subtotal');
            $table->double('total');
            $table->double('sellingprice');

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
        Schema::dropIfExists('addsalesitems');
    }
}
