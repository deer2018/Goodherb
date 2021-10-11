<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQ22Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_q2_2', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->integer('ep2_1')->nullable();
            $table->integer('ep2_2')->nullable();
            $table->integer('ep2_3')->nullable();
            $table->integer('ep2_4')->nullable();
            $table->integer('ep2_5')->nullable();
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
        Schema::dropIfExists('_q2_2');
    }
}
