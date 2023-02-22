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
        Schema::create('pobreakdowns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('style_id');
            $table->integer('style_quantity');
            $table->string('po_number');
            $table->integer('po_qty');
            $table->date('po_delivery_date');
            $table->timestamps();

            $table->foreign('style_id')->references('id')->on('style_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pobreakdowns');
    }
};
