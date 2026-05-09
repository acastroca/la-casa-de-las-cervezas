<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Creamos la tabla y etsablecemos las columnas
    public function up(): void
    {
        Schema::create('linea_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');
            $table->foreignId('producto_id')->constrained('productos');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 5, 2);
            $table->timestamps();
        });
    }

    //Si deshaces la migración borramos la tabla
    public function down(): void
    {
        Schema::dropIfExists('linea_pedidos');
    }
};
