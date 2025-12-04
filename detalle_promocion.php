<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle de Promoción</title>

    <link href="src/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>   
</head>
<body class="bg-cover bg-no-repeat bg-center min-h-screen"
      style="background-image: url('imagen/fondo.webp');">

<!-- Fondo blanco en móvil -->
<div class="md:hidden fixed inset-0 bg-white -z-10"></div>

<div class="flex min-h-screen flex-col justify-center px-6 py-20">

    <!-- Logo + título en línea -->
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center gap-4">
        <img src="img/logoInvertido.jpg" alt="Logo" class="h-20">
        <h2 class="text-2xl font-bold text-gray-900">Detalle de Promoción</h2>
    </div>

    <!-- Contenedor de la información -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <!-- Información de la promoción -->
        <div class="space-y-6">
            
            <!-- Nombre de la promoción -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Nombre de Promoción</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300">
                    Descuento de Verano 2024
                </div>
            </div>

            <!-- Nombre del producto -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Producto</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300">
                    Reparación de Laptop Premium
                </div>
            </div>

            <!-- Precio original -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Precio Original</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300">
                    $250.00
                </div>
            </div>

            <!-- Descuento -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Descuento</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300 text-green-600 font-semibold">
                    $50.00 (20% de descuento)
                </div>
            </div>

            <!-- Precio final -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Precio con Descuento</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300 text-blue-600 font-bold">
                    $200.00
                </div>
            </div>

            <!-- Fecha de inicio -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Fecha de Inicio</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300">
                    15 Noviembre 2024
                </div>
            </div>

            <!-- Fecha límite -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Fecha Límite</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300 text-red-600 font-semibold">
                    31 Diciembre 2024
                </div>
            </div>

            <!-- Días restantes -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Días Restantes</label>
                <div class="block w-full px-3 py-2 text-base bg-yellow-50 rounded-md border border-yellow-300 text-yellow-700 font-bold">
                    45 días
                </div>
            </div>

            <!-- Estado -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Estado</label>
                <div class="block w-full px-3 py-2 text-base bg-green-50 rounded-md border border-green-300 text-green-700 font-bold">
                    Activa
                </div>
            </div>

            <!-- Descripción -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Descripción</label>
                <div class="block w-full px-3 py-2 text-base bg-gray-50 rounded-md border border-gray-300 min-h-[100px]">
                    Promoción especial de fin de año para reparación completa de laptops. Incluye diagnóstico, limpieza interna, cambio de pasta térmica y optimización del sistema.
                </div>
            </div>

            <!-- BOTONES EN UNA LÍNEA -->
<div class="flex gap-4 pt-2">
    
    <!-- Botón Cancelar-->
    <a href="lista_promocion.php"
        class="w-1/2 py-3 px-4 text-lg font-semibold text-white
               bg-red-600 border border-red-600
               hover:bg-red-700
               transition duration-200 shadow-md hover:shadow-xl active:scale-95
               rounded-lg text-center">
        Cancelar
    </a>
    
    <!-- Botón Registrar (también va a lista después de "registrar") -->
    <a href="editar_promocion.php"
        class="w-1/2 py-3 px-4 text-lg font-semibold text-white
               bg-[#0E247B] border border-[#0E247B]
               hover:bg-[#122E9B]
               transition duration-200 shadow-md hover:shadow-xl active:scale-95
               rounded-lg text-center">
        Editar Promocion
    </a>
</div>

        </div>
    </div>

</div>

</body>
</html>