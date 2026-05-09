@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-16 flex justify-center items-center min-h-[70vh]">
        <div class="bg-white rounded-[40px] shadow-xl p-10 md:p-14 w-full max-w-xl border border-gray-100">

            <h2 class="text-3xl font-serif font-bold text-center mb-10 text-[#2D3142] uppercase tracking-widest">
                Registro
            </h2>   

            <form action="{{ route('registro') }}" method="POST" class="space-y-6">
                @csrf

                <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                    <label class="w-full md:w-1/3 text-gray-700 font-bold uppercase tracking-wide text-sm">Nombre
                        completo</label>
                    <input type="text" name="name" required
                        class="w-full md:w-2/3 bg-gray-50 border border-gray-200 rounded-xl h-12 px-4 focus:ring-2 focus:ring-[#D49A36] focus:border-transparent outline-none transition">
                </div>

                <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                    <label class="w-full md:w-1/3 text-gray-700 font-bold uppercase tracking-wide text-sm">Fecha
                        Nacimiento</label>
                    <div class="w-full md:w-2/3">
                        <input type="date" name="fecha_nacimiento" required 
                            max="{{ now()->subYears(18)->format('Y-m-d') }}"
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl h-12 px-4 focus:ring-2 focus:ring-[#D49A36] focus:border-transparent outline-none transition">
                        
                        @error('fecha_nacimiento')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                    <label class="w-full md:w-1/3 text-gray-700 font-bold uppercase tracking-wide text-sm">Email</label>
                    <input type="email" name="email" required
                        class="w-full md:w-2/3 bg-gray-50 border border-gray-200 rounded-xl h-12 px-4 focus:ring-2 focus:ring-[#D49A36] focus:border-transparent outline-none transition">
                </div>

                <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                    <label
                        class="w-full md:w-1/3 text-gray-700 font-bold uppercase tracking-wide text-sm">Contraseña</label>
                    <input type="password" name="password" required
                        class="w-full md:w-2/3 bg-gray-50 border border-gray-200 rounded-xl h-12 px-4 focus:ring-2 focus:ring-[#D49A36] focus:border-transparent outline-none transition">
                </div>

                <div class="flex items-start gap-3 pt-4">
                    <input type="checkbox" required class="mt-1 w-5 h-5 accent-[#D49A36] cursor-pointer">
                    <p class="text-xs text-gray-500 leading-tight">
                        Acepto la Política de Privacidad y confirmo que soy mayor de 18 años.
                    </p>
                </div>

                <div class="flex justify-center pt-6">
                    <button type="submit"
                        class="w-full md:w-auto bg-[#D49A36] text-white px-12 py-4 rounded font-bold uppercase tracking-widest hover:bg-[#B48124] transition shadow-lg transform hover:-translate-y-1">
                        Registrarse
                    </button>
                </div>

                <div class="text-center mt-6 pt-6 border-t border-gray-100">
                    <p class="text-gray-600 font-light text-sm">
                        ¿Ya tienes cuenta? <a href="{{ route('login') }}"
                            class="font-bold text-[#D49A36] hover:text-[#B48124] hover:underline transition">Inicia
                            sesión</a>
                    </p>
                </div>
            </form>

        </div>
    </div>
@endsection