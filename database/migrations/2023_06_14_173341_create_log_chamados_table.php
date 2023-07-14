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

        Schema::create('log_chamados', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('protocolo');
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->enum('operacao', ['criar', 'alterar', 'excluir'])->comment('criar, alterar, excluir');
            $table->enum('status_anterior', ['abertura', 'chamado', 'analise de produto', 'teste de aplicação', 'laudo', 'tratativa', 'aprovacao', 'finalizado', 'cancelado', 'reprovado']);
            $table->enum('status_atual', ['abertura', 'chamado', 'analise de produto', 'teste de aplicação', 'laudo', 'tratativa', 'aprovacao', 'finalizado', 'cancelado', 'reprovado']);
            $table->text('detalhes');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_chamados');
    }
};
