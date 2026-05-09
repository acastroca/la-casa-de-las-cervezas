<?php

namespace App\Http\Controllers;

use App\Models\ComunidadAutonoma;

class ComunidadController extends Controller
{
    public function mapa()
    {
        //Traemos todas las comunidades de la base de datos
        $comunidades = ComunidadAutonoma::all();
        return view('comunidades.mapa', compact('comunidades')); //Enviamos los datos de la variable comunidades a la vista mapa

        
    }


    public function show($id)
    {
        //Busca una comunidad por su id y guarda sus productos asociados
        $comunidad = ComunidadAutonoma::with('productos')->findOrFail($id);
        //Pasa la variable comunidad a la vista
        return view('comunidades.show', compact('comunidad'));
    }
}
