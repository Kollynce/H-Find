<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner');
            $table->string('title');
            $table->string('location');
            $table->string('status');
            $table->string('property')->default('property.jpg');
            $table->string('video');
            $table->string('map');
            $table->integer('price');
            $table->integer('size');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('tv');
            $table->integer('garages');
            $table->integer('pool');
            $table->text('description');
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
        Schema::dropIfExists('submits');
    }
}
