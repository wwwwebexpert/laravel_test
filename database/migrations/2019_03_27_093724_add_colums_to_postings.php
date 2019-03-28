<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToPostings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('postings', function (Blueprint $table) {
            $table->integer('uuid')->after('id');
            $table->string('name')->after('uuid');
            $table->string('status')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postings', function (Blueprint $table) {
            $table->dropColumn('uuid');
            $table->dropColumn('name');
            $table->dropColumn('status');
        });
    }
}
