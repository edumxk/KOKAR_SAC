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

        Schema::create('laudos', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('protocolo')->unique();
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->text('descricao');
            $table->boolean('is_procedente');
            $table->boolean('is_finalizado');
            $table->string('lote');
            $table->integer('codprod');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laudos');
    }
};
