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
            $table->increments('id');
            $table->integer('protocolo');
            $table->foreign('protocolo')->references('protocolo')->on('chamados');
            $table->integer('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->enum('operacao');
            $table->enum('status_anterior');
            $table->enum('status_atual');
            $table->timestamp('data_hora');
            $table->text('detalhes');
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
