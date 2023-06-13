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

        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('protocolo');
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->enum('tipo');
            $table->string('lote');
            $table->integer('codprod');
            $table->integer('qtd');
            $table->double('valor');
            $table->double('custo');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
