@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 md:px-10 py-16 flex flex-col lg:flex-row gap-10 lg:items-start">
        <div class="w-full lg:w-2/3">
            <h2 class="text-2xl font-bold mb-10 text-gray-800">Carrito de compra</h2>
            @if (session('success'))
                <div
                    style="background-color: #d1fae5; color: #065f46; padding: 1rem; border-radius: 0.5rem; margin-bottom: 2rem; text-align: center;">
                    <strong>¡Enhorabuena!</strong> {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div
                    style="background-color: #fee2e2; color: #991b1b; padding: 1rem; border-radius: 0.5rem; margin-bottom: 2rem; text-align: center;">
                    <strong>¡Atención!</strong> {{ session('error') }}
                </div>
            @endif

            @php $subtotal_acumulado = 0; @endphp

            <div class="space-y-6">
                @forelse($carrito as $id => $item)
                    @php
                        $precio_linea = $item['precio'] * $item['cantidad'];
                        $subtotal_acumulado += $precio_linea;
                    @endphp

                    <div id="producto-{{ $id }}"
                        class="bg-white border border-gray-200 rounded-xl p-6 flex flex-col sm:flex-row items-center justify-between shadow-sm gap-4">
                        <div class="flex items-center gap-6 w-full sm:w-auto">
                            <img src="{{ asset('images/' . $item['imagen']) }}" alt="{{ $item['nombre'] }}"
                                class="w-14 h-20 object-contain mix-blend-multiply">

                            <div>
                                <h4 class="font-bold text-gray-700">{{ $item['nombre'] }}</h4>

                                <div class="flex items-center gap-1 mt-2 mb-1 contenedor-botones-{{ $id }}">
                                    <form action="{{ route('carrito.update', $id) }}" method="POST"
                                        class="m-0 form-actualizar">
                                        @csrf
                                        <input type="hidden" name="cantidad" value="{{ $item['cantidad'] - 1 }}"
                                            class="input-menos">
                                        <button type="submit"
                                            class="btn-menos bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold py-1 px-3 rounded-l text-sm border border-gray-200 transition"
                                            {{ $item['cantidad'] <= 1 ? 'disabled' : '' }}>
                                            -
                                        </button>
                                    </form>

                                    <div id="cantidad-{{ $id }}"
                                        class="bg-gray-50 border-t border-b border-gray-200 py-1 px-4 text-sm font-bold text-gray-700">
                                        {{ $item['cantidad'] }}
                                    </div>

                                    <form action="{{ route('carrito.update', $id) }}" method="POST"
                                        class="m-0 form-actualizar">
                                        @csrf
                                        <input type="hidden" name="cantidad" value="{{ $item['cantidad'] + 1 }}"
                                            class="input-mas">
                                        <button type="submit"
                                            class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold py-1 px-3 rounded-r text-sm border border-gray-200 transition">
                                            +
                                        </button>
                                    </form>
                                </div>

                                <p class="text-xs text-amber-600">{{ number_format($item['precio'], 2) }}€ / unidad</p>
                            </div>

                        </div>
                        <div class="text-right w-full sm:w-auto flex sm:flex-col justify-between items-center sm:items-end">
                            <span id="linea-{{ $id }}"
                                class="font-bold text-lg sm:order-last">{{ number_format($precio_linea, 2) }}€</span>
                            <div class="flex gap-2 sm:mb-2">
                                <form action="{{ route('carrito.remove', $id) }}" method="POST" class="m-0 form-eliminar">
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-600 text-white text-[10px] px-3 py-1 rounded-full uppercase font-bold hover:bg-red-700 transition">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-10 bg-white rounded-xl border border-dashed border-gray-300">
                        <p class="text-gray-500 mb-4">Tu carrito está vacío. ¡Explora el catálogo!</p>
                        <a href="{{ route('catalogo') }}"
                            class="inline-block bg-[#D49A36] text-white px-6 py-2 rounded-full font-bold uppercase tracking-widest hover:bg-[#B48124] transition">
                            Volver a la tienda
                        </a>
                    </div>
                @endforelse
            </div>
        </div>

        @if (count($carrito) > 0)
            <div class="w-full lg:w-1/3 bg-[#C68A39] rounded-[40px] p-8 md:p-10 text-white shadow-2xl lg:sticky top-28">
                <h3 class="text-2xl font-bold mb-6">Pasarela de pago</h3>

                <form action="{{ route('pedido.store') }}" method="POST" class="space-y-4 text-sm">
                    @csrf
                    <div>
                        <label class="block mb-1 opacity-90">Titular de la tarjeta</label>
                        <input type="text" required name="titular"
                            class="w-full bg-white rounded-lg h-10 px-4 text-gray-800 focus:ring-2 ring-orange-400 outline-none">
                    </div>
                    <div>
                        <label class="block mb-1 opacity-90">Número de tarjeta</label>
                        <input type="text" required name="tarjeta" placeholder="0000 0000 0000 0000"
                            class="w-full bg-white rounded-lg h-10 px-4 text-gray-800 focus:ring-2 ring-orange-400 outline-none">
                    </div>
                    <div class="flex gap-4">
                        <div class="w-1/2">
                            <label class="block mb-1 opacity-90">Caducidad</label>
                            <input type="text" required name="caducidad" placeholder="MM/AA"
                                class="w-full bg-white rounded-lg h-10 px-4 text-gray-800 focus:ring-2 ring-orange-400 outline-none">
                        </div>
                        <div class="w-1/2">
                            <label class="block mb-1 opacity-90">CVV</label>
                            <input type="text" required name="cvv" placeholder="123"
                                class="w-full bg-white rounded-lg h-10 px-4 text-gray-800 focus:ring-2 ring-orange-400 outline-none">
                        </div>
                    </div>

                    @php
                        $iva = $subtotal_acumulado * 0.21;
                        $total_final = $subtotal_acumulado + $iva;
                    @endphp

                    <div class="mt-8 pt-6 border-t border-amber-400/50 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="opacity-80">Subtotal (sin IVA)</span>
                            <span id="resumen-subtotal">{{ number_format($subtotal_acumulado, 2) }}€</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="opacity-80">IVA (21%)</span>
                            <span id="resumen-iva">{{ number_format($iva, 2) }}€</span>
                        </div>
                        <div class="flex justify-between text-xl font-bold mt-4 pt-2 border-t border-white/20">
                            <span>TOTAL</span>
                            <span id="resumen-total" class="text-orange-100">{{ number_format($total_final, 2) }}€</span>
                        </div>
                    </div>

                    <button id="btn-total" type="submit"
                        class="w-full bg-[#EA580C] hover:bg-orange-700 text-white font-bold py-4 rounded-2xl mt-8 transition transform hover:scale-105 shadow-lg uppercase tracking-wider">
                        Pagar {{ number_format($total_final, 2) }}€
                    </button>
                </form>
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.form-actualizar');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Cortamos la recarga de página por defecto

                    const url = this.action;
                    const formData = new FormData(this);

                    fetch(url, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest', // Le dice a Laravel que es AJAX
                                'Accept': 'application/json' // Queremos JSON de vuelta
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // 1. Extraemos el ID del producto de la URL
                                const urlParts = url.split('/');
                                const idProducto = urlParts[urlParts.length - 1];

                                // 2. Actualizamos la línea del producto
                                document.getElementById('cantidad-' + idProducto).innerText =
                                    data.cantidad;
                                document.getElementById('linea-' + idProducto).innerText = data
                                    .precio_linea + '€';

                                // 3. Actualizamos la pasarela de pago
                                document.getElementById('resumen-subtotal').innerText = data
                                    .subtotal + '€';
                                document.getElementById('resumen-iva').innerText = data.iva +
                                    '€';
                                document.getElementById('resumen-total').innerText = data
                                    .total + '€';
                                document.getElementById('btn-total').innerText = 'Pagar ' + data
                                    .total + '€';

                                // 4. Mantenimiento: Actualizamos los inputs invisibles para que el siguiente clic sume o reste correctamente
                                const contenedorBotones = document.querySelector(
                                    '.contenedor-botones-' + idProducto);
                                const inputMenos = contenedorBotones.querySelector(
                                    '.input-menos');
                                const inputMas = contenedorBotones.querySelector('.input-mas');
                                const btnMenos = contenedorBotones.querySelector('.btn-menos');

                                let cantidadReal = parseInt(data.cantidad);
                                inputMenos.value = cantidadReal - 1;
                                inputMas.value = cantidadReal + 1;

                                // Bloqueamos el botón "-" si llega a 1 para no poner negativos
                                if (data.cantidad <= 1) {
                                    btnMenos.disabled = true;
                                } else {
                                    btnMenos.disabled = false;
                                }
                            }
                        })
                        .catch(error => console.error('Error al actualizar el carrito:', error));
                });
            });
        });
        // SCRIPT PARA ELIMINAR SIN RECARGAR
        const formsEliminar = document.querySelectorAll('.form-eliminar');

        formsEliminar.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Evitamos recarga

                const url = this.action;
                const formData = new FormData(this);

                // Extraemos el ID del producto de la URL
                const urlParts = url.split('/');
                const idProducto = urlParts[urlParts.length - 1];

                fetch(url, {
                        method: 'POST', // Laravel usa POST en tus rutas actuales
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            if (data.vacio) {
                                // Si era el último producto, recargamos para mostrar el diseño de "Carrito vacío"
                                window.location.reload();
                            } else {
                                // 1. Borramos la caja del producto visualmente con una transición suave
                                const filaProducto = document.getElementById('producto-' + idProducto);
                                filaProducto.style.transition = "all 0.3s ease";
                                filaProducto.style.opacity = "0";
                                filaProducto.style.transform = "scale(0.95)";

                                setTimeout(() => {
                                    filaProducto.remove();
                                }, 300); // Esperamos a que acabe la animación para quitar el HTML

                                // 2. Actualizamos los totales de la pasarela de pago
                                document.getElementById('resumen-subtotal').innerText = data.subtotal +
                                    '€';
                                document.getElementById('resumen-iva').innerText = data.iva + '€';
                                document.getElementById('resumen-total').innerText = data.total + '€';
                                document.getElementById('btn-total').innerText = 'Pagar ' + data.total +
                                    '€';
                            }
                        }
                    })
                    .catch(error => console.error('Error al eliminar:', error));
            });
        });
    </script>
@endsection
