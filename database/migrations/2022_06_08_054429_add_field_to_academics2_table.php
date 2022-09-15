<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToAcademics2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('academics', function (Blueprint $table) {
            $table->string('others')->nullable();
            $table->string('subject')->nullable();
            $table->string('institute')->nullable();
            $table->string('board')->nullable();
            $table->integer('year')->nullable();
            $table->float('percent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('academics2', function (Blueprint $table) {
            //
        });
    }
}
