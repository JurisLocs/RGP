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
        Schema::create('land_usages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lands_id');
            $table->string('usage');
            $table->float('size');
            $table->timestamps();
            $table->foreign('lands_id')->references('id')->on('lands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_usage');
    }
};
