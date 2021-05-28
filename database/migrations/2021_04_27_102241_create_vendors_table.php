<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('description')->nullable();
            $table->string('password');
            $table->string('document')->nullable();
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('service_category_id')->nullable();
            $table->foreign('service_category_id')->references('id')->on('service_category')->onDelete('cascade');
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
        Schema::dropIfExists('vendors');
    }
}
