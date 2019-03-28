<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToPostingExpertises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posting_expertises', function (Blueprint $table) {
            $table->integer('uuid');
            $table->integer('posting_id');
            $table->integer('expertise_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posting_expertises', function (Blueprint $table) {
            //
        });
    }
}
