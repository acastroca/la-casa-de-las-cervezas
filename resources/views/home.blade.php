@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 md:px-10 py-16">

        <!-- HERO -->
        <div
            class="text-center py-16 md:py-24 bg-white rounded-[40px] shadow-sm border border-gray-100 mb-16 relative overflow-hidden">
            <h1 class="text-4xl md:text-5xl font-serif font-extrabold text-[#2D3142] mb-6 tracking-wide">
                Descubre la Esencia de la Tradición
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                Explora la tradición de cada región, conoce su historia y recibe en casa las mejores variedades locales.
            </p>
        </div>

        <!-- SOBRE NOSOTROS -->
        <div class="max-w-5xl mx-auto mb-20 px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-serif font-semibold text-[#2D3142] mb-6 tracking-wide">
                Acerca de Nosotros
            </h2>

            <p class="text-gray-600 text-lg md:text-xl font-light leading-relaxed mb-6">
                Somos una plataforma dedicada a la difusión y comercialización de la
                <span class="text-[#D49A36] font-medium">cultura cervecera española</span>, diseñada para aquellos que buscan
                descubrir la identidad de cada región a través de su bebida más emblemática.
                Nuestro proyecto nace con la misión de unir tradición y tecnología, ofreciendo un espacio donde la historia
                de nuestras comunidades autónomas se encuentra a un solo clic de distancia.
            </p>

            <p class="text-gray-600 text-lg md:text-xl font-light leading-relaxed">
                A través de nuestra web, los usuarios pueden explorar un mapa interactivo cargado de contenido cultural y
                acceder a un catálogo exclusivo organizado por comunidades.
            </p>
        </div>

        <!-- MÁS VENDIDOS -->
        <div class="w-full max-w-6xl mx-auto py-16 px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-serif font-bold text-[#2D3142] uppercase tracking-widest">
                    Nuestras Más Vendidas
                </h2>
                <div class="w-24 h-1 bg-[#D49A36] mx-auto mt-4"></div>
            </div>

            <div class="relative">

                <!-- Flecha izquierda -->
                <button onclick="scrollCarrusel(-350)"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white border border-gray-200 text-[#D49A36] p-3 rounded-full shadow-md hover:bg-[#D49A36] hover:text-white transition-all opacity-80 hover:opacity-100 hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Carrusel -->
                <div id="carrusel-mas-vendidos"
                    class="flex overflow-x-auto gap-8 pb-10 px-10 snap-x snap-mandatory scroll-smooth custom-scroll">

                    @foreach ($mas_vendidos as $producto)
                        <div
                            class="min-w-[320px] max-w-[320px] snap-center bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition flex-shrink-0 group">

                            <div class="relative p-6 h-64 flex items-center justify-center bg-gray-50/50">
                                <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}"
                                    class="w-full h-48 object-contain mix-blend-multiply transition-transform duration-300 group-hover:scale-105">
                            </div>

                            <div class="p-6 flex flex-col">
                                <h3 class="font-bold text-lg text-gray-800 mb-1 line-clamp-1">
                                    {{ $producto->nombre }}
                                </h3>

                                <p class="text-base text-amber-600 font-medium mb-4">
                                    {{ $producto->comunidadAutonoma->nombre ?? 'Origen desconocido' }}
                                </p>

                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-gray-900">
                                        {{ number_format($producto->precio, 2) }}€
                                    </span>

                                    <form action="{{ route('carrito.add', $producto->id) }}" method="POST"
                                        class="m-0 form-add-carrito w-1/2">
                                        @csrf
                                        <button type="submit"
                                            class="btn-add bg-[#B48124] hover:bg-[#8E621B] text-white font-bold py-2 px-4 rounded transition w-full">
                                            Añadir
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Flecha derecha -->
                <button onclick="scrollCarrusel(350)"
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white border border-gray-200 text-[#D49A36] p-3 rounded-full shadow-md hover:bg-[#D49A36] hover:text-white transition-all opacity-80 hover:opacity-100 hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- FEATURES -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div
                class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition transform hover:-translate-y-1">
                <h3 class="text-xl font-bold text-[#D49A36] mb-3 uppercase tracking-wide">Selección Regional</h3>
                <p class="text-gray-600 leading-relaxed font-light">
                    Conectamos directamente con productores de todas las comunidades autónomas.
                </p>
            </div>

            <div
                class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition transform hover:-translate-y-1">
                <h3 class="text-xl font-bold text-[#D49A36] mb-3 uppercase tracking-wide">Opciones Especiales</h3>
                <p class="text-gray-600 leading-relaxed font-light">
                    Amplio catálogo de variedades sin gluten y sin alcohol.
                </p>
            </div>

            <div
                class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition transform hover:-translate-y-1">
                <h3 class="text-xl font-bold text-[#D49A36] mb-3 uppercase tracking-wide">Mapa Cultural</h3>
                <p class="text-gray-600 leading-relaxed font-light">
                    Aprende sobre la historia y el proceso de elaboración de cada zona.
                </p>
            </div>
        </div>

    </div>

    <!-- ESTILOS SCROLL -->
    <style>
        .custom-scroll::-webkit-scrollbar {
            height: 8px;
        }

        .custom-scroll::-webkit-scrollbar-track {
            background: #f3f4f6;
            border-radius: 10px;
        }

        .custom-scroll::-webkit-scrollbar-thumb {
            background: #D49A36;
            border-radius: 10px;
        }

        .custom-scroll::-webkit-scrollbar-thumb:hover {
            background: #b7812a;
        }
    </style>

    <script>
        function scrollCarrusel(distancia) {
            const carrusel = document.getElementById('carrusel-mas-vendidos');
            carrusel.scrollBy({
                left: distancia,
                behavior: 'smooth'
            });
        }
    </script>
@endsection
