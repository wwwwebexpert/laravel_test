<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToPostingWorkers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posting_workers', function (Blueprint $table) {
            $table->integer('uuid')->after("id");
            $table->integer('posting_id')->after("uuid");
            $table->integer('worker_id')->after("posting_id");
            $table->integer('status')->after("worker_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posting_workers', function (Blueprint $table) {
            //
        });
    }
}
