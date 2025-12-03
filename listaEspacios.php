<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anaqueles</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-white">

<div class="max-w-6xl mx-auto space-y-6 py-20 px-10">

    <!-- Encabezado -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex">
            <h1 class="text-5xl font-bold text-[#0d1c57]">Anaqueles</h1>            
        </div>
        

        <input  type="text" placeholder="Buscar anaquel por número, tipo o ubicación..." class="px-4 py-2 border rounded-lg w-full 
           sm:w-80 md:w-96 lg:w-[28rem]
           focus:outline-none focus:ring-2 focus:ring-[#0E247B]">
    </div>

    <!-- Grid de clientes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-6">

        <!-- Card 1 -->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold">
                <span class="text-gray-600">Núm. Anaquel:</span> AN-12
            </h2>
            <p class="text-gray-600">
                <span class="text-gray-400">Para:</span> Herramientas
            </p>
            <p class="text-gray-600">
                <span class="text-gray-400">Ubicación:</span> Taller
            </p>

            <div class="flex gap-3 mt-4">
                <button class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Editar
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Eliminar
                </button>
            </div>
        </div>

        <!-- Card 1 -->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold">
                <span class="text-gray-600">Núm. Anaquel:</span> AN-11
            </h2>
            <p class="text-gray-600">
                <span class="text-gray-400">Para:</span> Articulos para Venta
            </p>
            <p class="text-gray-600">
                <span class="text-gray-400">Ubicación:</span> Almacen
            </p>

            <div class="flex gap-3 mt-4">
                <button class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Editar
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Eliminar
                </button>
            </div>
        </div>

        <!-- Card 1 -->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold">
                <span class="text-gray-600">Núm. Anaquel:</span> AN-10
            </h2>
            <p class="text-gray-600">
                <span class="text-gray-400">Para:</span> Herramientas
            </p>
            <p class="text-gray-600">
                <span class="text-gray-400">Ubicación:</span> Almacen
            </p>

            <div class="flex gap-3 mt-4">
                <button class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Editar
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Eliminar
                </button>
            </div>
        </div>

        <!-- Copia las cards restantes si las necesitas -->
        <!-- Solo duplicas la estructura de arriba -->

    </div>

</div>

</body>
</html>
