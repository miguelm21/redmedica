<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->datetime('start');
            $table->datetime('end')->nullable();
            $table->string('eventType')->nullable();
            $table->datetime('dateStart');
            $table->datetime('dateEnd');
            $table->string('hourStart');
            $table->string('hourEnd');
            $table->string('minsStart');
            $table->string('minsEnd');
            $table->string('color',7)->nullable();
            $table->integer('medico_id')->unsigned()->nullable();
            $table->foreign('medico_id')->references('id')->on('medicos');
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
        Schema::dropIfExists('events');
    }
}
