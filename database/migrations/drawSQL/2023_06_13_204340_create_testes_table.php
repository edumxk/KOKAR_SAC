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

        Schema::create('testes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('protocolo');
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->integer('id_teste');
            $table->foreign('id_teste')->references('id')->on('item_testes');
            $table->string('descricao');
            $table->timestamp('data_inicio');
            $table->timestamp('data_fim');
            $table->enum('status');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testes');
    }
};
