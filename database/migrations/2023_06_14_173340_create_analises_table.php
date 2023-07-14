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
        Schema::disableForeignKeyConstraints();

        Schema::create('analises', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('protocolo')->unique();
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->string('metodo');
            $table->string('numlote');
            $table->text('resultado');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analises');
    }
};
