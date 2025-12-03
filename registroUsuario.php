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
        <h2 class="text-2xl font-bold text-gray-900">Registrar Nuevo Cliente</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">

            <!-- Numero -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">
                    Número de Cliente
                    
                </label>
                <input type="text" readonly
                    class="block w-full px-3 py-2 text-base bg-gray-300 rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    value="#142" required>
            </div>

            <!-- Nombre -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Nombres <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Nombre" required>
            </div>

            <!-- Apellidos -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Apellidos <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Apellido" required>
            </div>

            <!-- Teléfono -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Teléfono</label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="+52 55 1234 5678" required>
            </div>

            <!-- Correo -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Correo Electrónico <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="email"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="ejemplo@gmail.com" required>
            </div>

            <!-- Contraseña -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Contraseña <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="password"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Contraseña" required>
            </div>

            <!-- Confirmar contraseña -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Confirmar Contraseña <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="password"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Confirmar contraseña" required>
            </div>

            <!-- BOTONES EN UNA LÍNEA -->
            <div class="flex gap-4 pt-2">

                <!-- Botón Cancelar -->
                <button 
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-red-600 border border-red-600
                           hover:bg-red-700
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Cancelar
                </button>
                
                <!-- Botón Registrar -->
                <button 
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
