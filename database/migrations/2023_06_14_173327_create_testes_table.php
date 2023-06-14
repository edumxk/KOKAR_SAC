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
            $table->id();
            $table->enum('tipo', ['qualidade', 'aplicação']);
            $table->text('descricao');
            $table->smallInteger('dias');
            $table->smallInteger('horas');
            $table->boolean('is_ativo');
            $table->timestamps();
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
