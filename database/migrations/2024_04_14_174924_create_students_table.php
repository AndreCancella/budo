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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('belt');
            $table->string('birth_date');
            $table->string('email');
            $table->string('cpf');
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
        Schema::dropIfExists('students');
    }
};
