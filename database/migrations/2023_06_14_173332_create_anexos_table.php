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

        Schema::create('anexos', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('protocolo')->unique();
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->string('nome');
            $table->string('caminho');
            $table->timestamp('upload_at');
            $table->enum('tipo',['formulario', 'chamado', 'analise', 'tratativa', 'teste', 'laudo']);
            $table->unsignedBigInteger('id_analise')->nullable();
            $table->foreign('id_analise')->references('id')->on('analises');
            $table->unsignedBigInteger('id_teste')->nullable();
            $table->foreign('id_teste')->references('id')->on('testes');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anexos');
    }
};
