<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColoumsToRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->string('steps')->after('recipe');
            $table->integer('production_cost')->after('steps');
            $table->integer('manufacturing_cost')->after('production_cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('steps');
            $table->dropColumn('production_cost');
            $table->dropColumn('manufacturing_cost');
        });
    }
}
