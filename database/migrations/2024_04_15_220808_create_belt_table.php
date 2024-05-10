<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('belts', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('color');
            $table->unsignedBigInteger('dojo_id');   
            $table->foreign('dojo_id')->references('id')->on('dojos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('belt');
    }
};