<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Del Producto</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-cover bg-no-repeat bg-center min-h-screen"
      style="background-image: url('imagen/fondo.webp');">

<!-- Fondo blanco en móvil -->
<div class="md:hidden fixed inset-0 bg-white -z-10"></div>

<div class="flex min-h-screen flex-col justify-center px-6 py-20">

    <!-- Logo + título -->
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center gap-4">
        <img src="img/logoInvertido.jpg" alt="Logo" class="h-20">
        <h2 class="text-2xl font-bold text-gray-900">Detalles del Producto</h2>
    </div>

    <!-- Contenedor de detalles -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33] space-y-6">

        <!-- Nombre del producto -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Producto:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">Teclado Mecánico Gamer</h3>
        </div>

        <!-- Categoría -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Categoría:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">Equipo de computo y accesorios</h3>
        </div>

        <!-- Fabricante -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Fabricante:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">Redragon</h3>
        </div>

        <!-- Modelo -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Modelo:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">K552 Kumara</h3>
        </div>

        <!-- SKU/GTIN -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">SKU:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">190198654328</h3>
        </div>

        <!-- Precio de costo -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Precio costo:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">$300.00</h3>
        </div>

        <!-- Precio de venta -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Precio venta:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">$600.00</h3>
        </div>

        <!-- Stock -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Stock:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">14 unidades</h3>
        </div>

        <!-- Stock mínimo -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Stock mínimo:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">5 unidades</h3>
        </div>

        <!-- Descripción -->
        <div class="px-4">
            <p class="text-gray-700 font-medium text-lg mb-2">Descripción:</p>
            <p class="text-gray-900 bg-gray-50 p-4 rounded-lg border border-gray-200">
                Teclado mecánico compacto 60% con switches Outemu Blue y retroiluminación RGB. 
                Ideal para gaming y programación.
            </p>
        </div>

        <!-- BOTONES -->
        <div class="flex gap-4 pt-4">
            <button onclick="window.location.href='Lista_producto.php'"
                class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                       bg-red-600 border border-red-600
                       hover:bg-red-700
                       transition duration-200 shadow-md hover:shadow-xl active:scale-95
                       rounded-lg">
                Regresar
            </button>
            
            <button onclick="window.location.href='editarProducto.php?id=2'"
                class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                       bg-[#0E247B] border border-[#0E247B]
                       hover:bg-[#122E9B]
                       transition duration-200 shadow-md hover:shadow-xl active:scale-95
                       rounded-lg">
                Editar
            </button>
        </div>

    </div>

</div>

</body>
</html>