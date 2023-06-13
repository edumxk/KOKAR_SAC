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
            $table->increments('id');
            $table->integer('protocolo');
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->string('nome');
            $table->string('caminho');
            $table->timestamp('upload_at');
            $table->enum('tipo');
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
