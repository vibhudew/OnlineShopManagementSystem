<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('empName')->nullable();
            $table->string('monthYear')->nullable();
	        $table->float('totalWorkDur',6,2)->nullable();
	        $table->double('amtPerDur',8,2)->nullable();
            $table->double('allow',8,2)->nullable();
            $table->double('deduct',8,2)->nullable();
	        $table->integer('gross')->nullable();	
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
        Schema::dropIfExists('payrolls');
    }
}
