<?php

namespace App\Http\Controllers;

use App\Models\ComunidadAutonoma;

class MapaController extends Controller
{
    // --- MAPA INTERACTIVO E HISTORIAS ----
    public function index()
    {
        //Recuperamos todas las counidades para mostrarlas en el mapa
        $comunidades = ComunidadAutonoma::all();
        return view('mapa', compact('comunidades')); //Vamos a la vista de mapa pasando los datos de la variable comunidades
    }

    // Muestra la vista de la historia de una comunidad
    public function show($slug)
    {
        // Buscamos la comunidad por el slug de la base de datos
        $comunidad = ComunidadAutonoma::where('slug', $slug)->firstOrFail();

        // Vamos a la nueva vista que creamos en resources/views/historias/show.blade.php
        return view('historia', compact('comunidad'));
    }
}