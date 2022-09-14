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
            $table->date('fromdate1');
            $table->date('todate1');
            $table->integer('duration1');
            $table->string('empname1');
            $table->string('desig1');
            $table->string('specialisation1');
            $table->date('fromdate2');
            $table->date('todate2');
            $table->integer('duration2');
            $table->string('empname2');
            $table->string('desig2');
            $table->string('specialisation2');
            $table->date('fromdate3');
            $table->date('todate3');
            $table->integer('duration3');
            $table->string('empname3');
            $table->string('desig3');
            $table->string('specialisation3');
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
