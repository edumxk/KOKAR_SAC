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
        Schema::create('item_formularios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idopcao');
            $table->string('descricaoitem');
            $table->unsignedBigInteger('idformulario')->unsigned();
            $table->timestamps();
            $table->foreign('idformulario')->references('id')->on('cab_formularios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itemformularios');
    }
};
