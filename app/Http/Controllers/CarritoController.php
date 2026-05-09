<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    // --- MOSTRAR CARRITO ---
    public function index()
    {
        //Buscamos una sesión llamada carrito y si no existe devuelve un array vacío
        $carrito = session()->get('carrito', []);
        return view('carrito', compact('carrito')); //Vamos a la vista carrito y le pasamos los datos de la variable para que s epuedan usar en la vista
    }

    public function add(Request $request, $id)
    {
        //Buscamos la cerveza en la base de datos
        $producto = Producto::findOrFail($id);

        //Recuperamos el carrito de la sesión actual y sino creamos uno vacío
        $carrito = session()->get('carrito', []);

        // Guardar en el carrito
        if (isset($carrito[$id])) {
            // Si la cerveza ya estaba en el carrito, le sumamos 1 a la cantidad
            $carrito[$id]['cantidad']++;
        } else {
            // Si es nueva, la añadimos. 
            //Rellenamos los datos del producto
            $carrito[$id] = [
                "nombre" => $producto->nombre,
                "cantidad" => 1,
                "precio" => $producto->precio,
                "imagen" => $producto->imagen ?? 'sin-imagen.png' // Usamos ?? para poner un nombre de imagen por defecto si está vacía
            ];
        }

        // Actualizamos el carrito en la sesión
        session()->put('carrito', $carrito);

        if ($request->wantsJson()) {

            //Calculamos los articulos que hay en el carrito
            $total_articulos = 0;
            foreach (session('carrito') as $item) {
                $total_articulos += $item['cantidad'];
            }
            
            //Devolvemos que el producto se ha añadido con éxito
            return response()->json([
                'success' => true,
                'mensaje' => '¡Producto añadido!',
                'total_articulos' => $total_articulos
            ]);
        }

        // Si no es AJAX, hace lo de siempre
        return redirect()->back();
    }


    // --- ACTUALIZAR CANTIDAD ---
    public function update(Request $request, $id)
    {
        if ($id && $request->cantidad) {
            $carrito = session()->get('carrito');

            if (isset($carrito[$id])) {
                $carrito[$id]['cantidad'] = (int) $request->cantidad; // Convertimos a número entero
                session()->put('carrito', $carrito);
            }

            // Magia asíncrona: Si la petición viene de JavaScript, devolvemos JSON
            if ($request->wantsJson()) {
                $subtotal = 0;
                foreach (session('carrito') as $item) {
                    $subtotal += $item['precio'] * $item['cantidad'];
                }
                $iva = $subtotal * 0.21;
                $total_final = $subtotal + $iva;

                return response()->json([
                    'success' => true,
                    'cantidad' => $carrito[$id]['cantidad'],
                    'precio_linea' => number_format($carrito[$id]['precio'] * $carrito[$id]['cantidad'], 2),
                    'subtotal' => number_format($subtotal, 2),
                    'iva' => number_format($iva, 2),
                    'total' => number_format($total_final, 2)
                ]);
            }

            return redirect()->back();
        }
    }

    // --- ELIMINAR PRODUCTO ---
    public function remove(Request $request, $id)
    {
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }

        // Magia asíncrona para eliminar
        if ($request->wantsJson()) {
            $subtotal = 0;
            // Recalculamos con los productos que quedan
            foreach (session('carrito', []) as $item) {
                $subtotal += $item['precio'] * $item['cantidad'];
            }
            $iva = $subtotal * 0.21;
            $total_final = $subtotal + $iva;

            // Comprobamos si el carrito se ha quedado completamente vacío
            $esta_vacio = empty(session('carrito'));

            return response()->json([
                'success' => true,
                'subtotal' => number_format($subtotal, 2),
                'iva' => number_format($iva, 2),
                'total' => number_format($total_final, 2),
                'vacio' => $esta_vacio
            ]);
        }

        return redirect()->back();
    }
}
