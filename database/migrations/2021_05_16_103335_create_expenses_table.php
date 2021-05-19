<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('date');
            $table->decimal('amount');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('contact');
=======
            $table->string('ontact');
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
=======
            $table->string('ontact');
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
            $table->string('description')->nullable();
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
        Schema::dropIfExists('expenses');
    }
}
