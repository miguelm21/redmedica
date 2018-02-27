<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identification');
            $table->string('name');
            $table->string('lastName');
            $table->string('gender');
            $table->string('email',60);
            $table->string('password');
            $table->string('state');
            $table->integer('medicalCenter_id')->unsigned();
            $table->foreign('medicalCenter_id')->references('id')->on('medical_centers');
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();

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
        Schema::dropIfExists('medicos');
    }
}
