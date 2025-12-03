<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- npx @tailwindcss/cli -i css/tailwind.css -o src/output.css --watch -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-cover bg-no-repeat bg-center min-h-screen"
      style="background-image: url('imagen/fondo.webp');">

<!-- Fondo blanco en móvil -->
<div class="md:hidden fixed inset-0 bg-white -z-10"></div>

<div class="flex min-h-screen flex-col justify-center px-6 py-20">

    <!-- Logo + título en línea -->
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center gap-4">
        <img src="img/logoInvertido.jpg" alt="Logo" class="h-20">
        <h2 class="text-2xl font-bold text-gray-900">Registrar Nuevo Anaquel</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">

            <!-- Numero -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">
                    Número de Anaquel
                    
                </label>
                <input type="text" readonly
                    class="block w-full px-3 py-2 text-base bg-gray-300 rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    value="AN-12" required>
            </div>

            <!-- Que guardara -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">
                    Asignado a
                    <span class="text-red-500 font-bold ml-1">*</span>
                </label>
                <select name="" id="" class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                       focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                       placeholder:text-gray-400 transition duration-150">
                    <option value="">Herramientas</option>
                    <option value="">Materiales</option>
                    <option value="">Documentos</option>
                    <option value="">Articulos para Venta</option>
                </select>
            </div>

            <!-- Ubicacion -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">
                    Ubicación
                    <span class="text-red-500 font-bold ml-1">*</span>
                </label>
                <select name="" id="" class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                       focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                       placeholder:text-gray-400 transition duration-150">
                    <option value="">Recepción</option>
                    <option value="">Almacén</option>
                    <option value="">Taller</option>
                </select>
            </div>



            <!-- BOTONES EN UNA LÍNEA -->
            <div class="flex gap-4 pt-2">

                <!-- Botón Cancelar -->
                <button onclick="window.location.href='listaEspacios.php'"
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-red-600 border border-red-600
                           hover:bg-red-700
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Cancelar
                </button>
                
                <!-- Botón Registrar -->
                <button onclick="window.location.href='listaEspacios.php'"
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-[#0E247B] border border-[#0E247B]
                           hover:bg-[#122E9B]
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Registrar
                </button>

            </div>

        </form>
    </div>

</div>

</body>
</html>
