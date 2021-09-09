<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQ13Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_q1_3', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();
            $table->integer('ep3_1')->nullable();
            $table->integer('ep3_2')->nullable();
            $table->integer('ep3_3')->nullable();
            $table->integer('ep3_4')->nullable();
            $table->integer('ep3_5')->nullable();
            $table->integer('ep3_6')->nullable();
            $table->integer('ep3_7')->nullable();
            $table->integer('ep3_8')->nullable();
            $table->integer('ep3_9')->nullable();
            $table->integer('ep3_10')->nullable();
            $table->integer('ep3_11')->nullable();
            $table->integer('ep3_12')->nullable();
            $table->integer('ep3_13')->nullable();
            $table->integer('ep3_14')->nullable();
            $table->integer('ep3_15')->nullable();
            $table->integer('ep3_16')->nullable();
            $table->integer('ep3_17')->nullable();
            $table->integer('ep3_18')->nullable();
            $table->integer('ep3_19')->nullable();
            $table->integer('ep3_20')->nullable();
            $table->integer('ep3_21')->nullable();
            $table->integer('ep3_22')->nullable();
            $table->integer('ep3_23')->nullable();
            $table->integer('ep3_24')->nullable();
            $table->integer('ep3_25')->nullable();
            $table->integer('ep3_26')->nullable();
            $table->integer('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_q1_3');
    }
}
