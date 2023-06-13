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

        Schema::create('item_testes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo');
            $table->bigInteger('descricao');
            $table->smallInteger('dias');
            $table->smallInteger('horas');
            $table->bigInteger('column_6');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_testes');
    }
};
