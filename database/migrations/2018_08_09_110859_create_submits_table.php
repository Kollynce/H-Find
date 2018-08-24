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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
            $table->string('title');
            $table->string('location');
            $table->string('status');
            $table->string('property1')->default('property.jpg');
            $table->string('property2')->default('property.jpg');
            $table->string('property3')->default('property.jpg');
            $table->string('property4')->default('property.jpg');
            $table->string('video');
            $table->string('map');
            $table->integer('price');
            $table->integer('size');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('tv');
            $table->integer('garages');
            $table->integer('pool');
            $table->boolean('conditioning')->dafault(0);
            $table->boolean('laundry')->dafault(0);
            $table->boolean('yard')->dafault(0);
            $table->boolean('gas')->dafault(0);
            $table->boolean('internet')->dafault(0);
            $table->boolean('fire')->dafault(0);
            $table->boolean('cable')->dafault(0);
            $table->boolean('balcony')->dafault(0);
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
