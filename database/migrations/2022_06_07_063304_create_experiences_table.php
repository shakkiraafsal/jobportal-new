<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->date('fromdate')->nullable();;
            $table->date('todate')->nullable();;
            $table->integer('duration')->nullable();;
            $table->string('empname')->nullable();;
            $table->string('desig')->nullable();;
            $table->string('specialisation')->nullable();
            // TODO: add nullables
            $table->date('fromdate1')->nullable();
            $table->date('todate1')->nullable();
            $table->integer('duration1')->nullable();
            $table->string('empname1')->nullable();
            $table->string('desig1')->nullable();
            $table->string('specialisation1')->nullable();
            $table->date('fromdate2')->nullable();
            $table->date('todate2')->nullable();
            $table->integer('duration2')->nullable();
            $table->string('empname2')->nullable();
            $table->string('desig2')->nullable();
            $table->string('specialisation2')->nullable();
            $table->date('fromdate3')->nullable();
            $table->date('todate3')->nullable();
            $table->integer('duration3')->nullable();
            $table->string('empname3')->nullable();
            $table->string('desig3')->nullable();
            $table->string('specialisation3')->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
