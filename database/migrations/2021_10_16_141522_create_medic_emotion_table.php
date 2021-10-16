<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicEmotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medic_emotion', function (Blueprint $table) {
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
            $table->integer('ep1_14')->nullable();
            $table->integer('ep1_15')->nullable();
            $table->integer('ep1_16')->nullable();
            $table->integer('ep1_17')->nullable();
            $table->integer('ep1_18')->nullable();
            $table->integer('ep1_19')->nullable();
            $table->integer('ep1_20')->nullable();
            $table->integer('ep1_21')->nullable();
            $table->integer('ep1_22')->nullable();
            $table->integer('ep1_23')->nullable();
            $table->integer('ep1_24')->nullable();
            $table->integer('ep1_25')->nullable();
            $table->integer('ep1_26')->nullable();
            $table->integer('ep1_27')->nullable();
            $table->integer('ep1_28')->nullable();
            $table->integer('ep1_29')->nullable();
            $table->integer('ep1_30')->nullable();
            $table->integer('ep1_31')->nullable();
            $table->integer('ep1_32')->nullable();
            $table->integer('ep1_33')->nullable();
            $table->integer('ep1_34')->nullable();
            $table->integer('ep1_35')->nullable();
            $table->integer('ep1_36')->nullable();
            $table->integer('ep1_37')->nullable();
            $table->integer('ep1_38')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medic_emotion');
    }
}
