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

        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->integer('codcli');
            $table->enum('status', ['abertura', 'chamado', 'analise de produto', 'teste de aplicacao', 'laudo', 'tratativa', 'aprovacao', 'finalizado', 'cancelado', 'reprovado']);
            $table->BigInteger('protocolo')->unique();
            $table->foreign('protocolo')->references('protocolo')->on('formularios');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
