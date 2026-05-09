<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MayorDeEdad
{
    public function handle(Request $request, Closure $next)
    {
        // Si NO existe la sesión 'mayor_de_edad', lo mandamos fuera
        if (!session()->has('mayor_de_edad') || session('mayor_de_edad') !== true) {
            return redirect()->route('verificar.edad');
        }

        return $next($request);
    }
}