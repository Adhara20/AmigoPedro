<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Venta</title>
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
        <h2 class="text-2xl font-bold text-gray-900">Detalles de la Venta</h2>
    </div>

    <!-- Contenedor de detalles -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33] space-y-6">

        <!-- ID de Venta -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">ID Venta:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">#VTA001</h3>
        </div>

        <!-- Cliente -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Cliente:</p>
            <div class="w-2/3">
                <h3 class="text-lg font-semibold text-gray-900">Juan Pérez</h3>
                <p class="text-gray-600 text-sm">juan@email.com</p>
            </div>
        </div>

        <!-- Fecha -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Fecha:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">2024-03-15</h3>
        </div>

        <!-- Hora -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Hora:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">14:30:05</h3>
        </div>

        <!-- Producto -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Producto:</p>
            <div class="w-2/3">
                <h3 class="text-lg font-semibold text-gray-900">Teclado Mecánico Gamer</h3>
                <p class="text-gray-600 text-sm">Redragon K552 Kumara</p>
            </div>
        </div>

        <!-- SKU -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">SKU:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">190198654328</h3>
        </div>

        <!-- Cantidad -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Cantidad:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">2 unidades</h3>
        </div>

        <!-- Precio unitario -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Precio unitario:</p>
            <h3 class="text-lg font-semibold text-gray-900 w-2/3">$600.00</h3>
        </div>

        <!-- Total -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Total:</p>
            <h3 class="text-2xl font-bold text-[#0E247B] w-2/3">$1,200.00</h3>
        </div>

        <!-- Método de pago -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Método de pago:</p>
            <div class="w-2/3">
                <span class="px-3 py-1 inline-flex text-sm font-semibold rounded-full bg-blue-100 text-blue-800">
                    Efectivo
                </span>
            </div>
        </div>

        <!-- Estado -->
        <div class="flex px-4">
            <p class="text-gray-700 font-medium text-lg w-1/3">Estado:</p>
            <div class="w-2/3">
                <span class="px-3 py-1 inline-flex text-sm font-semibold rounded-full bg-green-100 text-green-800">
                    Completada
                </span>
            </div>
        </div>

        <!-- Observaciones -->
        <div class="px-4">
            <p class="text-gray-700 font-medium text-lg mb-2">Observaciones:</p>
            <p class="text-gray-900 bg-gray-50 p-4 rounded-lg border border-gray-200">
                Cliente satisfecho con el producto. Pago completo en efectivo.
                Se entregó con todos los accesorios incluidos.
            </p>
        </div>

        <!-- BOTONES -->
        <div class="flex gap-4 pt-4">
            <button onclick="window.location.href='Lista_ventas.php'"
                class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                       bg-red-600 border border-red-600
                       hover:bg-red-700
                       transition duration-200 shadow-md hover:shadow-xl active:scale-95
                       rounded-lg">
                Regresar
            </button>
            
            <button onclick="window.location.href='editarVenta.php'"
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