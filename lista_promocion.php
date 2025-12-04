<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Promociones</title>

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
        <h2 class="text-2xl font-bold text-gray-900">Lista de Promociones</h2>
    </div>

    <!-- Contenedor de la tabla -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-4xl bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <!-- Barra de búsqueda y filtros -->
        <div class="mb-6 flex flex-col sm:flex-row gap-4">
            <!-- Buscador -->
            <div class="flex-1">
                <input type="text" 
                    class="block w-full px-4 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Buscar promoción...">
            </div>
            
            <!-- Botón Nueva Promoción -->
            <a href="registro_promociones.php"
                class="py-2 px-6 text-lg font-semibold text-white
                       bg-[#0E247B] border border-[#0E247B]
                       hover:bg-[#122E9B]
                       transition duration-200 shadow-md hover:shadow-xl active:scale-95
                       rounded-lg whitespace-nowrap flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Nueva Promoción
            </a>
        </div>

        <!-- Tabla de promociones -->
        <div class="overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Promoción
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Producto
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Descuento
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Fecha Límite
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Estado
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Fila 1 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="font-medium text-gray-900">Descuento Verano</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-700">Reparación Laptop</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-sm font-semibold bg-green-100 text-green-800 rounded-full">
                                $50.00
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-700">31/12/2024</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-sm font-semibold bg-green-100 text-green-800 rounded-full">
                                Activa
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex gap-2">
                                <a href="detalle_promocion.php"
                                    class="text-[#0E247B] hover:text-[#122E9B] font-semibold">
                                    Ver
                                </a>
                                <a href="#"
                                    class="text-yellow-600 hover:text-yellow-800 font-semibold">
                                    Editar
                                </a>
                                <a href="#"
                                    class="text-red-600 hover:text-red-800 font-semibold">
                                    Eliminar
                                </a>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Fila 2 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="font-medium text-gray-900">Mantenimiento Express</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-700">Limpieza PC</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-sm font-semibold bg-green-100 text-green-800 rounded-full">
                                $30.00
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-700">15/11/2024</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-sm font-semibold bg-red-100 text-red-800 rounded-full">
                                Expirada
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex gap-2">
                                <a href="detalle_promocion.php"
                                    class="text-[#0E247B] hover:text-[#122E9B] font-semibold">
                                    Ver
                                </a>
                                <a href="#"
                                    class="text-yellow-600 hover:text-yellow-800 font-semibold">
                                    Editar
                                </a>
                                <a href="#"
                                    class="text-red-600 hover:text-red-800 font-semibold">
                                    Eliminar
                                </a>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Fila 3 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="font-medium text-gray-900">Black Friday</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-700">Instalación Software</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-sm font-semibold bg-green-100 text-green-800 rounded-full">
                                40%
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-700">29/11/2024</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-sm font-semibold bg-blue-100 text-blue-800 rounded-full">
                                Próxima
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex gap-2">
                                <a href="detalle_promocion.php"
                                    class="text-[#0E247B] hover:text-[#122E9B] font-semibold">
                                    Ver
                                </a>
                                <a href="#"
                                    class="text-yellow-600 hover:text-yellow-800 font-semibold">
                                    Editar
                                </a>
                                <a href="#"
                                    class="text-red-600 hover:text-red-800 font-semibold">
                                    Eliminar
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div class="mt-6 flex items-center justify-between">
            <div class="text-sm text-gray-700">
                Mostrando <span class="font-semibold">3</span> de <span class="font-semibold">12</span> promociones
            </div>
            <div class="flex gap-2">
                <button class="px-3 py-1 text-sm bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                    Anterior
                </button>
                <button class="px-3 py-1 text-sm bg-[#0E247B] text-white rounded-md">
                    1
                </button>
                <button class="px-3 py-1 text-sm bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                    2
                </button>
                <button class="px-3 py-1 text-sm bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                    3
                </button>
                <button class="px-3 py-1 text-sm bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                    Siguiente
                </button>
            </div>
        </div>

    </div>

</div>

</body>
</html>