@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-16 flex justify-center items-center min-h-[70vh]">
        <div class="bg-white rounded-[40px] shadow-xl p-10 md:p-14 w-full max-w-lg border border-gray-100">

            <h2 class="text-3xl font-serif font-bold text-center mb-10 text-[#2D3142] uppercase tracking-widest">
                Iniciar Sesión
            </h2>

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf

                <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                    <label class="w-full md:w-1/3 text-gray-700 font-bold uppercase tracking-wide text-sm">Email</label>
                    <div class="w-full md:w-2/3">
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full bg-gray-50 border border-gray-200 rounded-xl h-12 px-4 focus:ring-2 focus:ring-[#D49A36] focus:border-transparent outline-none transition">
                        
                        @error('email')
                            <p class="text-red-500 text-xs mt-1 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                    <label
                        class="w-full md:w-1/3 text-gray-700 font-bold uppercase tracking-wide text-sm">Contraseña</label>
                    <input type="password" name="password" required
                        class="w-full md:w-2/3 bg-gray-50 border border-gray-200 rounded-xl h-12 px-4 focus:ring-2 focus:ring-[#D49A36] focus:border-transparent outline-none transition">
                </div>

                <div class="flex justify-center pt-8">
                    <button type="submit"
                        class="w-full md:w-auto bg-[#D49A36] text-white px-12 py-4 rounded font-bold uppercase tracking-widest hover:bg-[#B48124] transition shadow-lg transform hover:-translate-y-1">
                        Entrar
                    </button>
                </div>

                <div class="text-center mt-8 pt-6 border-t border-gray-100">
                    <p class="text-gray-600 font-light">
                        ¿No tienes cuenta? <a href="{{ route('registro') }}"
                            class="font-bold text-[#D49A36] hover:text-[#B48124] hover:underline transition">Regístrate
                            aquí</a>
                    </p>
                </div>
            </form>

        </div>
    </div>
@endsection