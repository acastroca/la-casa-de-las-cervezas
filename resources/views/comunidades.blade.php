@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 md:px-10 py-16">

        <div
            class="flex flex-col-reverse md:flex-row items-center bg-white p-8 md:p-16 shadow-sm rounded-[40px] border border-gray-100 gap-12">

            <div class="w-full md:w-2/3">
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-800 uppercase tracking-widest mb-6">
                    {{ $region->nombre }}
                </h1>

                <div class="w-24 h-1 bg-[#D49A36] mb-8"></div>

                <div class="text-lg text-gray-700 leading-relaxed text-justify font-light mb-10">
                    {!! nl2br(e($region->historia)) !!}
                </div>

                <a href="{{ route('catalogo', ['comunidad' => $region->id]) }}"
                    class="inline-block bg-[#D49A36] text-white px-8 py-4 rounded-full font-bold uppercase tracking-widest hover:bg-[#B48124] transition shadow-lg transform hover:-translate-y-1">
                    Ver catálogo de esta región
                </a>
            </div>

            <div class="w-full md:w-1/3 flex justify-center items-center">
                {{-- Cambiamos el círculo por un contenedor redondeado suave --}}
                <div
                    class="w-full max-w-[320px] aspect-square bg-white rounded-[2rem] shadow-xl border border-gray-100 flex items-center justify-center p-8 transition-all duration-500 hover:shadow-2xl">

                    {{-- Quitamos overflow-hidden para que nada se sienta "asfixiado" --}}
                    <img src="{{ asset($region->imagen_logo) }}" alt="Logo {{ $region->nombre }}"
                        class="max-w-full max-h-full object-contain transform hover:scale-110 transition duration-500">

                </div>
            </div>
        </div>
    </div>
@endsection
