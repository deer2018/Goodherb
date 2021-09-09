<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQ11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_q1_1', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->integer('ep1_1')->nullable();
            $table->integer('ep1_2')->nullable();
            $table->integer('ep1_3')->nullable();
            $table->integer('ep1_4')->nullable();
            $table->integer('ep1_5')->nullable();
            $table->integer('ep1_6')->nullable();
            $table->integer('ep1_7')->nullable();
            $table->integer('ep1_8')->nullable();
            $table->integer('ep1_9')->nullable();
            $table->integer('ep1_10')->nullable();
            $table->integer('ep1_11')->nullable();
            $table->integer('ep1_12')->nullable();
            $table->integer('ep1_13')->nullable();
            $table->string('total')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_q1_1');
    }
}
