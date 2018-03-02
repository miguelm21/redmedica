<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('users', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->string('email',60)->unique();
             $table->string('role')->nullable();


             $table->integer('city_id')->unsigned()->nullable();
             $table->foreign('city_id')->references('id')->on('cities');

             $table->integer('medico_id')->nullable();
             $table->integer('patient_id')->nullable();
             $table->integer('assistants_id')->nullable();

             $table->integer('administrator_id')->unsigned()->nullable();
             $table->foreign('administrator_id')->references('id')->on('administrators');

             $table->integer('promoter_id')->unsigned()->nullable();
             $table->foreign('promoter_id')->references('id')->on('promoters');

             $table->string('password');
             $table->string('confirmation_code')->nullable();
             $table->string('confirmed')->default('false');

             $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}