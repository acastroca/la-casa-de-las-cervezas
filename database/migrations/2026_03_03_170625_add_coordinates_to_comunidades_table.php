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
        Schema::table('comunidades', function (Blueprint $table) {
            // Añadimos las columnas para las coordenadas
            $table->integer('pos_x')->default(0)->after('imagen_logo');
            $table->integer('pos_y')->default(0)->after('pos_x');
        });
    }

    public function down(): void
    {
        Schema::table('comunidades', function (Blueprint $table) {
            $table->dropColumn(['pos_x', 'pos_y']);
        });
    }
};
