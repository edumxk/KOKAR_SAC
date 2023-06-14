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
            $table->id();
            $table->unsignedBigInteger('id_permissao');
            $table->foreign('id_permissao')->references('id')->on('permissoes');
            $table->unsignedBigInteger('id_setor')->nullable();
            $table->unsignedBigInteger('id_cargo')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->enum('nivel', ["0","1","2","3","4","5"]);
            $table->timestamps();
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
