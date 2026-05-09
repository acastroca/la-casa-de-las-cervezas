<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Creamos la tabla y etsablecemos las columnas
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comunidad_id')->constrained('comunidades')->onDelete('cascade');
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 4, 2);
            $table->integer('stock');
            $table->string('imagen');
        });
    }

    //Si deshaces la migración borramos la tabla
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
