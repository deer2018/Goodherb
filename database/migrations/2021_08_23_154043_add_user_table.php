<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->string('surname')->nullable();
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('race')->nullable();
            $table->string('relationship')->nullable();
            $table->string('occupation')->nullable();
            $table->string('income')->nullable();
            $table->string('religion')->nullable();
            $table->string('education')->nullable();
            $table->string('relevance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
