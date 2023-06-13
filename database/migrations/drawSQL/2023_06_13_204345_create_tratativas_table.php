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
            $table->integer('protocolo');
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->enum('tipo');
            $table->integer('id_produto')->nullable();
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->enum('tipo_secundario')->nullable();
            $table->string('descricao')->nullable();
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
