<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Creamos la tabla y etsablecemos las columnas
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('total', 8, 2);
            $table->dateTime('fecha_pedido')->useCurrent();
            $table->timestamps();
        });
    }

    //Si deshaces la migración borramos la tabla
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
