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

        Schema::create('tratativas', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('protocolo')->unique();
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->enum('tipo_1',['CTD', 'comercial', 'financeiro']);
            $table->enum('tipo_2', ['produto', 'dinheiro'])->nullable();
            $table->enum('tipo_3', ['mão de obra', 'hospedagem', 'frete', 'combustivel', 'produto'])->nullable();
            $table->string('descricao')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratativas');
    }
};
