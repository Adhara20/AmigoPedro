<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-cover bg-no-repeat bg-center min-h-screen"
      style="background-image: url('imagen/fondo.webp');">

<div class="md:hidden fixed inset-0 bg-white -z-10"></div>

<div class="flex min-h-screen flex-col justify-center px-6 py-20">

    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center gap-4">
        <img src="img/logoInvertido.jpg" alt="Logo" class="h-20">
        <h2 class="text-2xl font-bold text-gray-900">Editar Venta</h2>
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">

            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Producto </label>
                <input type="text"
                       class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                              focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                              placeholder:text-gray-400 transition duration-150"
                       value="Audifonos" required>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Código de producto (GTIN) </label>
                    <input type="text"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="8437558160023" required>
                </div>

                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Modelo </label>
                    <input type="text"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="Sony WF-C510" required>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Precio de venta: </label>
                    <input type="number"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="45" min="0" required>
                </div>

                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Cantidad vendida: </label>
                    <input type="number"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="1" min="0" required>
                </div>
            </div>

            <div class="flex gap-4 pt-2">

                <button type="button" onclick="window.location.href='lista_ventas.php'"
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-red-600 border border-red-600
                           hover:bg-red-700
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Cancelar
                </button>
                
                <button type="button" onclick="window.location.href='lista_ventas.php'"
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-[#0E247B] border border-[#0E247B]
                           hover:bg-[#122E9B]
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Guardar Cambios
                </button>

            </div>

        </form>
    </div>

</div>

</body>
</html>
