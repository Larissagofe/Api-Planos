<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('planos', function (Blueprint $table) {
            $table->dropColumn('products');  // Remover a coluna 'products'
        });
    }

    public function down()
    {
        Schema::table('planos', function (Blueprint $table) {
            $table->string('products')->nullable();  // Caso precise desfazer a migration
        });
    }
};
