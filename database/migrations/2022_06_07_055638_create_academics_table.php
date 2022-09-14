<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phd')->nullable();
            $table->string('phdboard')->nullable();
            $table->integer('phdyear')->nullable();
            $table->string('pg')->nullable();
            $table->string('pgsubject')->nullable();
            $table->string('pginstitute')->nullable();
            $table->string('pgboard')->nullable();
            $table->integer('pgyear')->nullable();
            $table->float('pgpercent')->nullable();
            $table->string('ug')->nullable();
            $table->string('ugsubject')->nullable();
            $table->string('uginstitute')->nullable();
            $table->string('ugboard')->nullable();
            $table->integer('ugyear')->nullable();
            $table->float('ugpercent')->nullable();
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
        Schema::dropIfExists('academics');
    }
}
