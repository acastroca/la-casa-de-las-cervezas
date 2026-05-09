<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Crear la tabla y establecer las columnas
    public function up(): void
    {
        Schema::create('comunidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('slug')->unique();
            $table->text('historia');
            $table->string('imagen_logo')->nullable();
            $table->timestamps();
        });
    }

    //Si deshaces la migración borras la tabla
    public function down(): void
    {
        Schema::dropIfExists('comunidades');
    }
};
