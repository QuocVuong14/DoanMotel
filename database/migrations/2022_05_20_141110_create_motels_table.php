<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('address_id');
            $table->integer('user_id');
            $table->string('title');
            $table->integer('image_id');
            $table->string('information');
            $table->string('price');
            $table->float('acreage');
            $table->integer('gender_id');
            $table->integer('category_id');
            $table->integer('is_active');
            $table->integer('status');
            $table->string('iframe');

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
        Schema::dropIfExists('motels');
    }
}
