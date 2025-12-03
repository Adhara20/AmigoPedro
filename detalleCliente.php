<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Cliente</title>
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
        <h2 class="text-2xl font-bold text-gray-900">Información del Cliente</h2>
    </div>

    <!-- Contenedor de detalles -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33] space-y-4">

        <!-- Número de Cliente -->
        <div class="flex px-4">
            <h3 class="text-gray-700 font-medium text-lg">Número de Cliente:</h3>
            <h3 class="text-lg font-semibold text-gray-900 ml-4">#142</h3>
        </div>

        <!-- Nombres -->
        <div class="flex px-4">
            <h3 class="text-gray-700 font-medium text-lg">Nombres:</h3>
            <h3 class="text-lg font-semibold text-gray-900 ml-4">Aide</h3>
        </div>

        <!-- Apellidos -->
        <div class="flex px-4">
            <h3 class="text-gray-700 font-medium text-lg">Apellidos:</h3>
            <h3 class="text-lg font-semibold text-gray-900 ml-4">Suarez</h3>
        </div>

        <!-- Correo -->
        <div class="flex px-4">
            <h3 class="text-gray-700 font-medium text-lg">Correo Electrónico:</h3>
            <h3 class="text-lg font-semibold text-gray-900 ml-4">aide123@gmail.com</h3>
        </div>

        <!-- Teléfono -->
        <div class="flex px-4">
            <h3 class="text-gray-700 font-medium text-lg">Teléfono:</h3>
            <h3 class="text-lg font-semibold text-gray-900 ml-4">+52 55 1234 5678</h3>
        </div>

        <!-- Botones -->
        <div class="flex gap-4 pt-4">
            <button onclick="window.location.href='listaClientes.php'"
                class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                       bg-red-600 border border-red-600
                       hover:bg-red-700
                       transition duration-200 shadow-md hover:shadow-xl active:scale-95
                       rounded-lg">
                Regresar
            </button>
            
            <button onclick="window.location.href='editarCliente.php'"
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
