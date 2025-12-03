<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - El Amigo Pedro</title>
    <link rel="stylesheet" href="src/output.css">

</head>
<?php include('navbar.php');
?>

<!-- con una clase y un color de fondo cambiamos el color de todo el cuerpo -->
    <style>
    /* Pantalla normal */
    body{
        background-image: url(imagen/fDef.webp);
        background-repeat: no-repeat;
        background-size: cover;
    }
    /* Ocultar fondo para movil */
    @media (max-width: 768px){
        body{
        background-image: none;
        background-color: white;
    }
    }
 </style>

<body class="bg-gray-100">
    

    <!-- CONTENIDO PRINCIPAL -->
    <main class="p-8">
        <h1 class="text-3xl font-bold mb-6 mt-16 text-blue-300">Página principal</h1>

        <div class="w-full max-w-6xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10 px-4 mb-10">

        <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-green-600">
        <h3 class="text-xl font-semibold text-gray-700">Ventas</h3>
        <p class="text-4xl font-bold text-green-700 mt-2">31</p>
        <span class="text-gray-500">Esta semana...</span>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-blue-600">
        <h3 class="text-xl font-semibold text-gray-700">Tareas</h3>
        <p class="text-4xl font-bold text-blue-700 mt-2">7</p>
        <span class="text-gray-500">En progreso...</span>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-yellow-400">
        <h3 class="text-xl font-semibold text-gray-700">Clientes</h3>
        <p class="text-4xl font-bold text-yellow-500 mt-2">12</p>
        <span class="text-gray-500">Registrados...</span>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-yellow-900">
        <h3 class="text-xl font-semibold text-gray-700">Articulos</h3>
        <p class="text-4xl font-bold text-orange-800 mt-2">108</p>
        <span class="text-gray-500">En stock...</span>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-yellow-700">
        <h3 class="text-xl font-semibold text-gray-700">Pedidos</h3>
        <p class="text-4xl font-bold text-yellow-600 mt-2">4</p>
        <span class="text-gray-500">En progreso...</span>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-800">
        <h3 class="text-xl font-semibold text-gray-700">Anaqueles</h3>
        <p class="text-4xl font-bold text-red-700 mt-2">8</p>
        <span class="text-gray-500">Disponibles...</span>
        </div>

        </div>
    </main>
</body>

</html>