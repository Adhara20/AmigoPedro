<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

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
        <h2 class="text-2xl font-bold text-gray-900">Editar Una Promocion</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">
            

            <!-- Nombre de la promocion -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Nombre De Promocion <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Editar Nombre De La Promocion" required>
            </div>

            <!-- Nombre del producto -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Nombre Del Producto <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Editar Nombre Del Producto" required>
            </div>

            <!-- Precio de descuento -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1"> Descuento Aplicado <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="INT"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Editar Descuento" required>
            </div>

            <!-- Fecha de inicio de la promocion -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Fecha De Inicio <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="date"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Editar Fecha De Inicio" required>
            </div>

            <!-- Fecha limite de la promocion -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Fecha Limite <span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="date"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Editar Fecha Limite" required>
            </div>

           

            <!-- BOTONES EN UNA LÍNEA -->
<div class="flex gap-4 pt-2">
    
    <!-- Botón Cancelar (volver a la lista) -->
    <a href="lista_promocion.php"
        class="w-1/2 py-3 px-4 text-lg font-semibold text-white
               bg-red-600 border border-red-600
               hover:bg-red-700
               transition duration-200 shadow-md hover:shadow-xl active:scale-95
               rounded-lg text-center">
        Cancelar
    </a>
    
    <!-- Botón Registrar Editar -->
    <a href="lista_promocion.php"
        class="w-1/2 py-3 px-4 text-lg font-semibold text-white
               bg-[#0E247B] border border-[#0E247B]
               hover:bg-[#122E9B]
               transition duration-200 shadow-md hover:shadow-xl active:scale-95
               rounded-lg text-center">
        Editar Promocion
    </a>
</div>

        </form>
    </div>

</div>

</body>
</html>