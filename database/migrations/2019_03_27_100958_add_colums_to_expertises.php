<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToExpertises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expertises', function (Blueprint $table) {
            $table->integer('uuid')->after("id");
            $table->string('name')->after("uuid");
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expertises', function (Blueprint $table) {
            $table->dropColumn('uuid');
            $table->dropColumn('name');
             
        });
    }
}
