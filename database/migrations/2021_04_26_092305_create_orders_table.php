<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phone');           
            $table->string('address');
            $table->date('order_time');
            $table->string('note');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
