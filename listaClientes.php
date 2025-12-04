<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-white">

<div class="max-w-6xl mx-auto space-y-6 py-20 px-10">

    <!-- Encabezado -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center gap-4">
            <h1 class="text-5xl font-bold text-[#0d1c57]">Clientes</h1>
            <!-- Botón Agregar -->
            <a href="registroCliente.php" class="py-2 px-4 bg-green-100 text-green-400 rounded-lg shadow-md border text-green-400 font-bold
            hover:bg-green-400 hover:text-green-100 transition duration-200">
                + Agregar Cliente
            </a>
        </div>

        <input 
            type="text"
            placeholder="Buscar cliente por nombre o número..."
            class="px-4 py-2 border rounded-lg w-full 
                   sm:w-80 md:w-96 lg:w-[28rem]
                   focus:outline-none focus:ring-2 focus:ring-[#0E247B]"
        >
    </div>

    <!-- Grid de clientes -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-6">

        <!-- Card 1 -->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold">Aide Suarez</h2>
            <p class="text-gray-600">
                <span class="text-gray-400">Núm. Cliente:</span> #02340
            </p>
            <p class="text-gray-600">aide123@gmail.com</p>
                
            <div class="flex gap-3 mt-4">
                <button onclick="document.location='editarCliente.php'" class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Editar
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Eliminar
                </button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold">Aide Suarez</h2>
            <p class="text-gray-600">
                <span class="text-gray-400">Núm. Cliente:</span> #02340
            </p>
            <p class="text-gray-600">aide123@gmail.com</p>
                
            <div class="flex gap-3 mt-4">
                <button onclick="document.location='editarCliente.php'" class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Editar
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Eliminar
                </button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold">Aide Suarez</h2>
            <p class="text-gray-600">
                <span class="text-gray-400">Núm. Cliente:</span> #02340
            </p>
            <p class="text-gray-600">aide123@gmail.com</p>
                
            <div class="flex gap-3 mt-4">
                <button onclick="document.location='editarCliente.php'" class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Editar
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Eliminar
                </button>
            </div>
        </div>

    </div>

</div>

</body>
</html>
