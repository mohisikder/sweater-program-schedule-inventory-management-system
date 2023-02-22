<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('style_details', function (Blueprint $table) {
            $table->id();
            $table->string('style_name');
            $table->integer('style_quantity');
            $table->string('style_file_no');
            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('agent_id');
            $table->string('yarn_details');
            $table->unsignedBigInteger('gauge_id');
            $table->string('style_weight');
            $table->string('style_photo_one')->nullable();
            $table->string('style_photo_two')->nullable();
            $table->string('style_photo_three')->nullable();
            $table->timestamps();

            $table->foreign('buyer_id')->references('id')->on('buyers');
            $table->foreign('agent_id')->references('id')->on('agents');
            $table->foreign('gauge_id')->references('id')->on('gauges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('style_details');
    }
};