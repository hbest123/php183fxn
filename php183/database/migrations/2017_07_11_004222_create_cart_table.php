<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //购物车
        Schema::create('cart', function (Blueprint $table) {
            
        $table->increments('id');
        $table->string('name');
        $table->integer('uid');
        $table->integer('sid');
        $table->string('ptype');
        $table->string('ntype');
        $table->integer('count');
        $table->string('price');
        $table->string('color');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
