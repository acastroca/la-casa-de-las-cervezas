<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Casa de las Cervezas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Para que el footer quede abajo */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
            /* Evita scrolls horizontales raros */
        }

        /*Empuja el footer hacia abajo*/
        main {
            flex: 1;
        }
    </style>
</head>

<body class="bg-[#FDFBF0] text-gray-800 font-sans">

    <header class="bg-[#D49A36] text-white shadow-md relative z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">

                <div class="flex items-center gap-4 flex-1 justify-start">
                    <button id="btn-abrir-menu"
                        class="hover:text-yellow-200 transition focus:outline-none flex items-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center">
                        <img src="{{ asset('images/logoPrincipal.png') }}" alt="Logo de la tienda" class="h-20 w-auto">
                    </a>
                </div>

                <nav class="hidden md:flex justify-center space-x-12 font-bold uppercase tracking-wider text-sm flex-1">
                    <a href="{{ route('catalogo') }}" class="hover:text-yellow-200 transition">Catálogo</a>
                    <a href="{{ route('mapa') }}" class="hover:text-yellow-200 transition">Mapa</a>
                </nav>

                <div class="flex items-center justify-end space-x-6 flex-1">
                    <a href="{{ route('carrito') }}" class="hover:text-yellow-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>

                    @guest
                        <a href="{{ route('login') }}" class="hover:text-yellow-200 transition" title="Iniciar Sesión">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </a>
                    @else
                        <div class="flex items-center space-x-4">
                            <span class="text-xs font-bold uppercase hidden lg:inline tracking-tight">
                                Hola, <span class="text-yellow-200">{{ Auth::user()->name }}</span>
                            </span>
                            
                            <form action="{{ route('logout') }}" method="POST" class="inline m-0 p-0">
                                @csrf
                                <button type="submit" class="hover:text-yellow-200 transition flex items-center cursor-pointer"
                                    title="Cerrar Sesión">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </header>


    <div id="fondo-oscuro" class="fixed inset-0 bg-black/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>

    <div id="menu-lateral"
        class="fixed top-0 left-0 h-full w-72 bg-[#D49A36] text-white shadow-2xl z-50 transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col">

        <div class="flex items-center justify-between p-6 border-b border-[#B48124]">
            <h2 class="text-xl font-serif font-bold tracking-widest uppercase">Menú</h2> <button id="btn-cerrar-menu"
                class="text-white hover:text-yellow-200 transition transform hover:rotate-90 duration-300 focus:outline-none cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor"> 
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto py-4 px-3 custom-scrollbar">
            
            <div class="mb-4 border-b border-[#B48124] pb-4 md:hidden">
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('catalogo') }}" class="block px-4 py-3 rounded-lg text-sm font-bold tracking-wider uppercase hover:bg-white hover:text-[#D49A36] transition-all duration-200">
                            Catálogo
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mapa') }}" class="block px-4 py-3 rounded-lg text-sm font-bold tracking-wider uppercase hover:bg-white hover:text-[#D49A36] transition-all duration-200">
                            Mapa
                        </a>
                    </li>
                </ul>
            </div>

            <h3 class="px-4 mb-2 text-xs font-semibold text-yellow-200 uppercase tracking-wider">Comunidades</h3>

            <ul class="space-y-1">
                @foreach ($comunidades_menu as $comunidad)
                    <li>
                        <a href="{{ route('catalogo', ['comunidad' => $comunidad->id]) }}"
                            class="block px-4 py-3 rounded-lg text-sm font-medium hover:bg-white hover:text-[#D49A36] transition-all duration-200">
                            {{ $comunidad->nombre }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#B48124] text-white py-12 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('images/logoPrincipal.png') }}" alt="Logo de la tienda" class="h-20 w-auto">
                    </a>
                </div>
                
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="w-8 h-8 border-2 border-white rounded-md flex items-center justify-center cursor-pointer hover:bg-white hover:text-[#B48124] text-white transition-colors duration-300" aria-label="Facebook">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.891h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <a href="#" class="w-8 h-8 border-2 border-white rounded-md flex items-center justify-center cursor-pointer hover:bg-white hover:text-[#B48124] text-white transition-colors duration-300" aria-label="Instagram">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-4 h-4" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                </div>
            <div>
                <h4 class="font-bold mb-4 text-sm">Empresa</h4>
                <ul class="space-y-2 text-xs opacity-90">
                    <li><a class="hover:underline">¿Cómo funciona?</a></li>
                    <li><a class="hover:underline">¿Quiénes somos?</a></li>
                    <li><a class="hover:underline">Sistemas de envíos</a></li>
                    <li><a class="hover:underline">Trabaja con nosotros</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4 text-sm">Información</h4>
                <ul class="space-y-2 text-xs opacity-90">
                    <li><a class="hover:underline">Política de privacidad</a></li>
                    <li><a class="hover:underline">Política de calidad</a></li>
                    <li><a class="hover:underline">Términos y condiciones</a></li>
                    <li><a class="hover:underline">Aviso legal</a></li>
                    <li><a class="hover:underline">Envíos y Devoluciones</a></li>
                    <li><a class="hover:underline">Centro de ayuda</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4 text-sm">Contacto</h4>
                <ul class="space-y-2 text-xs opacity-90">
                    <li><a class="hover:underline">Contacta con nosotros</a></li>
                    <li><a class="hover:underline">info@lacasadelascervezas.com</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnAbrir = document.getElementById('btn-abrir-menu');
            const btnCerrar = document.getElementById('btn-cerrar-menu');
            const menuLateral = document.getElementById('menu-lateral');
            const fondoOscuro = document.getElementById('fondo-oscuro');

            // Función para abrir
            function abrirMenu() {
                menuLateral.classList.remove('-translate-x-full');
                fondoOscuro.classList.remove('hidden');
                setTimeout(() => fondoOscuro.classList.remove('opacity-0'), 10);
                document.body.style.overflow = 'hidden';
            }

            // Función para cerrar
            function cerrarMenu() {
                menuLateral.classList.add('-translate-x-full');
                fondoOscuro.classList.add('opacity-0');
                setTimeout(() => fondoOscuro.classList.add('hidden'), 300);
                document.body.style.overflow = 'auto';
            }

            // Asignar los eventos a los botones
            btnAbrir.addEventListener('click', abrirMenu);
            btnCerrar.addEventListener('click', cerrarMenu);
            fondoOscuro.addEventListener('click', cerrarMenu);
        });
    </script>
</body>

</html>