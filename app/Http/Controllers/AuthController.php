<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // --- REGISTRO ---
    public function create()
    {
        return view('registro'); // Nos lleva a la vista de registro
    }

    public function store(Request $request)
    {
        // Validamos que los datos introducidos en el formulario sean correctos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
            // AQUÍ ESTÁ EL AJUSTE: Comprobación estricta de 18 años
            'fecha_nacimiento' => 'required|date|before_or_equal:' . now()->subYears(18)->format('Y-m-d'),
        ], [
            // Mensaje de error personalizado si no cumple la regla
            'fecha_nacimiento.before_or_equal' => 'Debes ser mayor de 18 años para poder registrarte.',
        ]);

        // Creamos el usuario en la base de datos y encriptamos la contraseña
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fecha_nacimiento' => $request->fecha_nacimiento,
        ]);

        // Hacemos que el usuario inicie sesión al completar el registro
        Auth::login($user);

        // Mandamos al usuario al catálogo
        return redirect()->route('catalogo');
    }

    // --- LOGIN ---
    // Para validar que el usuario se encuentre en la base de datos
    public function authenticate(Request $request)
    {
        // Los campos de email y contraseña son obligatorios
        // El email debe tener un formato concreto
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intenta iniciar sesión con los datos introducidos en el bloque anterior verificando la contraseña hasheada
        if (Auth::attempt($credentials)) {
            // Genera de nuevo el id de la sesión haciendo el login más seguro
            $request->session()->regenerate();
             
            return redirect()->route('catalogo'); // Te lleva al inicio
        }

        // Si se introducen mal los datos te llega un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }
    
    public function guardarEdad(Request $request)
    {
        // Guardamos en la sesión que el usuario ha introducido su edad
        session()->put('es_mayor', true);
        
        // Lo mandamos al inicio
        return redirect()->route('home');
    }

    // --- LOGOUT ---
    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión
        $request->session()->invalidate(); // Borra los datos de la sesión
        $request->session()->regenerateToken(); // Crea un nuevo CSRF para que el anterior no sea válido

        // Volvemos al inicio
        return redirect()->route('inicio'); 
    }
}