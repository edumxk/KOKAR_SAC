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

        Schema::create('permissoes_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_permissao');
            $table->foreign('id_permissao')->references('id')->on('permissoes');
            $table->integer('id_setor')->nullable();
            $table->integer('id_cargo')->nullable();
            $table->integer('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->enum('nivel');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissoes_users');
    }
};
