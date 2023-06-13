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

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tema', 20)->nullable();
            $table->smallInteger('id_setor')->nullable();
            $table->foreign('id_setor')->references('id')->on('setores');
            $table->smallInteger('id_cargo')->nullable();
            $table->foreign('id_cargo')->references('id')->on('cargos');
            $table->enum('nivel')->nullable();
            $table->string('winthor_user', 30)->nullable();
            $table->string('remember_token')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
