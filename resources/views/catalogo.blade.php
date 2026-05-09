@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 md:px-10 py-16">

        <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
            <h1 class="text-3xl font-bold text-gray-800">
                @if ($comunidadSeleccionada)
                    Catálogo de {{ $comunidadSeleccionada->nombre }}
                @else
                    Nuestras Cervezas
                @endif
            </h1>

            <div class="flex gap-2">
                <a href="{{ request()->fullUrlWithQuery(['filtro' => 'sin-gluten']) }}"
                    class="bg-amber-100 text-amber-900 border-amber-300 hover:bg-amber-200 text-xs font-semibold px-3 py-1 rounded-full border transition cursor-pointer">
                    Sin Gluten
                </a>

                <a href="{{ request()->fullUrlWithQuery(['filtro' => 'sin-alcohol']) }}"
                    class="bg-orange-100 text-orange-900 border-orange-300 hover:bg-orange-200 text-xs font-semibold px-3 py-1 rounded-full border transition cursor-pointer">
                    Sin Alcohol
                </a>
                @if (request()->has('filtro'))
                    <a href="{{ request()->fullUrlWithoutQuery('filtro') }}"
                        class="bg-gray-100 text-gray-600 text-xs font-semibold px-3 py-1 rounded-full border border-gray-300 hover:bg-gray-200 transition cursor-pointer">
                        ✕ Quitar filtro
                    </a>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($productos as $producto)
                <div
                    class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition group">
                    <div class="relative p-4 h-64 flex items-center justify-center bg-gray-50/50">
                        <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}"
                            class="w-full h-56 object-contain mix-blend-multiply transition-transform duration-300 group-hover:scale-110">
                    </div>

                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-1 line-clamp-1">{{ $producto->nombre }}</h3>
                        <p class="text-base text-amber-600 font-medium mb-4">
                            {{ $producto->comunidadAutonoma->nombre ?? 'Origen desconocido' }}
                        </p>

                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-2xl font-bold text-gray-900">{{ number_format($producto->precio, 2) }}€</span>

                            <form action="{{ route('carrito.add', $producto->id) }}" method="POST" class="m-0 form-add-carrito w-1/2">
                                @csrf
                                <button type="submit"
                                    class="btn-add bg-[#B48124] hover:bg-[#8E621B] text-white font-bold py-2 px-4 rounded transition w-full">
                                    Añadir </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 flex justify-center">
            {{ $productos->links() }}
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formsAdd = document.querySelectorAll('.form-add-carrito');

            formsAdd.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Evitamos que la página recargue

                    const url = this.action;
                    const formData = new FormData(this);
                    const boton = this.querySelector('.btn-add');
                    const textoOriginal = boton.innerText; // Guardamos el texto "Añadir al carrito"

                    boton.disabled = true;
                    boton.classList.add('opacity-75');

                    fetch(url, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json' // Esto le dice a Laravel que queremos respuesta JSON
                            }
                        })
                        .then(response => {
                            // AQUÍ ESTÁ LA MAGIA: Comprobamos si el usuario no ha iniciado sesión
                            if (response.status === 401) {
                                window.location.href = "{{ route('login') }}"; // Lo mandamos al login
                                throw new Error('Usuario no autenticado'); // Cortamos la ejecución
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                // Éxito: Cambiamos el botón a color verde y decimos ¡Añadido!
                                boton.innerText = '¡Añadido!';
                                boton.classList.remove('bg-[#B48124]', 'hover:bg-[#8E621B]');
                                boton.classList.add('bg-green-600', 'hover:bg-green-700');

                                // A los 2 segundos, devolvemos el botón a su estado normal
                                setTimeout(() => {
                                    boton.innerText = textoOriginal;
                                    boton.disabled = false;
                                    boton.classList.remove('opacity-75', 'bg-green-600',
                                        'hover:bg-green-700');
                                    boton.classList.add('bg-[#B48124]',
                                        'hover:bg-[#8E621B]');
                                }, 2000);
                            }
                        })
                        .catch(error => {
                            // Si el error fue por no estar logueado, no mostramos el texto de error en el botón
                            if (error.message !== 'Usuario no autenticado') {
                                console.error('Error al añadir:', error);
                                boton.innerText = 'Error';
                                boton.disabled = false;
                                boton.classList.remove('opacity-75');
                            }
                        });
                });
            });
        });
    </script>
@endsection
