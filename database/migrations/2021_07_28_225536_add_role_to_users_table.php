<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
  
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("role")->nullable()->default("guest");
            $table->string("status")->nullable()->default("ยังไม่ได้ตรวจสอบ");
        });
    }

  
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
