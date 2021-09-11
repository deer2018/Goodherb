<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQ14Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_q1_4', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->integer('ep4_1')->nullable();
            $table->integer('ep4_2')->nullable();
            $table->integer('ep4_3')->nullable();
            $table->integer('ep4_4')->nullable();
            $table->integer('ep4_5')->nullable();
            $table->integer('ep4_6')->nullable();
            $table->integer('ep4_7')->nullable();
            $table->integer('ep4_8')->nullable();
            $table->integer('ep4_9')->nullable();
            $table->integer('ep4_10')->nullable();
            $table->integer('total')->nullable();
            $table->string('group')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_q1_4');
    }
}
