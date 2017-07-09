<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('userdetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->string('nickname')->default('xiaobai');
            $table->string('sex')->default('女');
            $table->string('qq')->default('123456'); 
            $table->string('phone')->default('12345678909');
            $table->string('avatar')->default('default.jpg');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdetail');
    }
}
