<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisTable extends Migration
{
    
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable();           
            $table->string('advice')->nullable();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('diagnosis');
    }
}
