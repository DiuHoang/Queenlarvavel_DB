<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');

            $table->unsignedBigInteger('vendor_id');
            

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');;
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');;
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
        Schema::dropIfExists('comment');
    }
}
