<?php

namespace App\Http\Controllers;

use App\Models\ComunidadAutonoma;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        // 1. Iniciamos la consulta con la relación para evitar el problema N+1
        $query = Producto::with('comunidadAutonoma');
        
        // Creamos la variable vacía para que no de error en la vista si no hay filtro
        $comunidadSeleccionada = null;

        // 2. Filtro de Comunidad
        if ($request->has('comunidad')) {
            $query->where('comunidad_id', $request->comunidad);
            // Buscamos el objeto de la comunidad para tener el nombre en el título
            $comunidadSeleccionada = ComunidadAutonoma::find($request->comunidad);
        }

        // 3. Filtros especiales (Gluten / Alcohol)
        if ($request->has('filtro')) {
            if ($request->filtro == 'sin-gluten') {
                $query->where(function ($q) {
                    $q->where('nombre', 'LIKE', '%sin gluten%')
                      ->orWhere('descripcion', 'LIKE', '%sin gluten%');
                });
            } elseif ($request->filtro == 'sin-alcohol') {
                $query->where(function ($q) {
                    $q->where('nombre', 'LIKE', '%0,0%')
                      ->orWhere('nombre', 'LIKE', '%sin alcohol%');
                });
            }
        }

        // 4. Paginamos (quitamos la línea que reiniciaba el query)
        $productos = $query->paginate(8);

        // Mantenemos los filtros en la URL al cambiar de página
        $productos->appends($request->query());

        // 5. ¡IMPORTANTE!: Hay que añadir 'comunidadSeleccionada' al compact
        return view('catalogo', compact('productos', 'comunidadSeleccionada'));
    }

    public function inicio()
    {
        $mas_vendidos = Producto::inRandomOrder()->take(6)->get();
        return view('home', compact('mas_vendidos'));
    }
}