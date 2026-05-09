@extends('layouts.app')

@section('content')
    <style>
        /* Estilos esenciales para que el mapa funcione */
        #mapa-container svg {
            width: 100%;
            height: auto;
            display: block;
        }

        #mapa-container path {
            fill: #FDB927 !important;
            stroke: #ffffff !important;
            stroke-width: 0.8;
            transition: fill 0.3s ease;
        }

        #mapa-container path:hover {
            fill: #D49A36 !important;
            cursor: pointer;
        }
    </style>

    {{-- Contenedor sin bordes, sin sombras y sin fondo blanco --}}
    <div class="w-full py-12">

        <div class="text-center mb-10">
            <h1 class="text-4xl font-serif font-bold text-[#2D3142] uppercase tracking-widest">
                Mapa Interactivo
            </h1>
            <div class="w-24 h-1 bg-[#D49A36] mx-auto mt-4"></div>
        </div>

        {{-- El contenedor del mapa ahora es transparente y ocupa su ancho natural --}}
        <div id="mapa-container" class="relative mx-auto max-w-6xl">

            {{-- Imagen del mapa sin sombras ni bordes redondeados --}}
            <img src="{{ asset('images/mapa.png') }}" alt="Mapa" class="w-full h-auto block">

            @foreach ($comunidades as $comunidad)
                <div class="absolute" style="left: {{ $comunidad->pos_x }}%; top: {{ $comunidad->pos_y }}%;">
                    <a href="{{ route('historia', $comunidad->slug) }}"
                        class="flex flex-col items-center group relative transform hover:scale-110 transition duration-300">

                        {{-- 1. He eliminado 'p-1' para que la imagen llegue hasta el borde --}}
                        {{-- 2. Se mantiene 'overflow-hidden' para que la imagen se recorte en forma de círculo --}}
                        <div
                            class="w-10 h-10 md:w-16 md:h-16 bg-white rounded-full border-2 border-[#D49A36] shadow-md overflow-hidden flex items-center justify-center">

                            {{-- 3. He cambiado 'object-contain' por 'object-cover' --}}
                            <img src="{{ asset('images/' . $comunidad->imagen_logo) }}" alt="{{ $comunidad->nombre }}"
                                class="w-full h-full object-cover">

                        </div>

                        <span
                            class="absolute -top-8 bg-[#2D3142] text-white text-[10px] md:text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition whitespace-nowrap z-10">
                            {{ $comunidad->nombre }}
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
