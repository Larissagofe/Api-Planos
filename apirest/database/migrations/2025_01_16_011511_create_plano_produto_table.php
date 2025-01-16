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
        Schema::create('plano_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plano_id')->constrained()->onDelete('cascade');  // Chave estrangeira para 'planos'
            $table->foreignId('produto_id')->constrained()->onDelete('cascade');  // Chave estrangeira para 'produtos'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plano_produto');
    }
};
