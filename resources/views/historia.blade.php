@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-20">
        <a href="{{ route('mapa') }}"
            class="text-[#D49A36] font-bold uppercase tracking-widest text-sm mb-10 inline-block hover:underline">
            ← Volver al mapa
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <h1 class="text-5xl font-serif font-bold text-[#2D3142] uppercase leading-tight">
                    {{ $comunidad->nombre }}
                </h1>
                <div class="w-24 h-1 bg-[#D49A36]"></div>

                <p class="text-lg text-gray-700 leading-relaxed text-justify font-light">
                    {!! nl2br(e($comunidad->historia)) !!}
                </p>

                <div class="pt-8">
                    <a href="{{ route('catalogo', ['comunidad' => $comunidad->id]) }}"
                        class="inline-block bg-[#D49A36] text-white px-8 py-4 rounded-full font-bold uppercase tracking-widest hover:bg-[#B48124] transition shadow-lg transform hover:-translate-y-1">
                        Ver catálogo de esta región
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <!-- El contenedor genera la circunferencia blanca (p-3) y la sombra -->
                <div
                    class="w-80 h-80 rounded-full bg-white p-5 shadow-2xl border border-gray-100 flex items-center justify-center overflow-hidden">
                    <!-- La imagen rellena el círculo interno por completo -->
                    <img src="{{ asset('images/' . $comunidad->imagen_logo) }}" alt="Logo de {{ $comunidad->nombre }}"
                        class="w-full h-full object-cover rounded-full">
                </div>
            </div>
        </div>
    </div>
@endsection
