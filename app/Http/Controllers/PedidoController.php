<?php

namespace App\Http\Controllers;

use App\Models\LineaPedido;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        $carrito = session()->get('carrito');

        if (!$carrito) {
            return redirect()->back()->with('error', 'El carrito está vacío');
        }

        DB::beginTransaction();

        try {
            $total = 0;
            $lineasData = [];

            foreach ($carrito as $id => $details) {

                // Bloquea el producto durante la transacción para evitar ventas simultáneas
                $producto = Producto::where('id', $id)->lockForUpdate()->first();

                if (!$producto) {
                    throw new \Exception("Un producto del carrito ya no está disponible.");
                }

                $cantidad = (int) $details['cantidad'];

                if ($cantidad <= 0) {
                    throw new \Exception("Cantidad no válida para el producto {$producto->nombre}.");
                }

                if ($producto->stock < $cantidad) {
                    throw new \Exception("No hay stock suficiente de {$producto->nombre}. Stock disponible: {$producto->stock}.");
                }

                $subtotal = $producto->precio * $cantidad;
                $total += $subtotal;

                $lineasData[] = [
                    'producto_id' => $producto->id,
                    'cantidad' => $cantidad,
                    'precio_unitario' => $producto->precio
                ];

                // Restamos stock
                $producto->stock -= $cantidad;
                $producto->save();
            }

            $pedido = new Pedido();
            $pedido->user_id = Auth::id();
            $pedido->total = $total;
            $pedido->save();

            foreach ($lineasData as $data) {
                $linea = new LineaPedido();
                $linea->pedido_id = $pedido->id;
                $linea->producto_id = $data['producto_id'];
                $linea->cantidad = $data['cantidad'];
                $linea->precio_unitario = $data['precio_unitario'];
                $linea->save();
            }

            DB::commit();

            session()->forget('carrito');

            return redirect()->route('carrito')->with('success', '¡Pedido realizado con éxito!');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('carrito')->with('error', 'Fallo técnico: ' . $e->getMessage());
        }
    }
}