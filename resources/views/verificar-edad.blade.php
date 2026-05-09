<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Edad - TFG</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-white rounded-[40px] shadow-2xl overflow-hidden p-8 md:p-12 text-center relative">
        
        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
        </div>

        <h2 class="text-3xl font-extrabold text-gray-800 mb-4">¿Eres mayor de edad?</h2>
        <p class="text-gray-500 mb-8 text-sm leading-relaxed">
            Para acceder a nuestro catálogo y comprar nuestros productos, la legislación vigente exige que tengas al menos 18 años. Por favor, confirma tu edad.
        </p>

        <div class="space-y-4">
            <form action="{{ route('guardar.edad') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="w-full bg-[#EA580C] hover:bg-orange-700 text-white font-bold py-4 rounded-2xl transition transform hover:scale-105 shadow-lg uppercase tracking-wider cursor-pointer">
                    Sí, tengo 18 años o más
                </button>
            </form>

            <a href="https://www.google.com" class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold py-4 rounded-2xl transition uppercase tracking-wider">
                No, soy menor de edad
            </a>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100">
            <p class="text-xs text-gray-400">
                Al hacer clic en "Sí", confirmas que tienes la edad legal para el consumo de alcohol en tu país de residencia.
            </p>
        </div>

    </div>

</body>
</html>