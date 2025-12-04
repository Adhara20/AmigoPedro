<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-white">

<div class="max-w-6xl mx-auto space-y-6 py-20 px-10">

    <!-- Encabezado -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center gap-4">
            <h1 class="text-5xl font-bold text-[#0d1c57]">Productos</h1>
            <!-- Botón Agregar -->
            <a href="Form_producto.php" class="py-2 px-4 bg-green-100 text-green-400 rounded-lg shadow-md border text-green-400 font-bold
            hover:bg-green-400 hover:text-green-100 transition duration-200">
                + Agregar Producto
            </a>
        </div>

        <input 
            type="text"
            placeholder="Buscar producto por nombre, modelo o SKU..."
            class="px-4 py-2 border rounded-lg w-full 
                   sm:w-80 md:w-96 lg:w-[28rem]
                   focus:outline-none focus:ring-2 focus:ring-[#0E247B]"
        >
    </div>

    <!-- Grid de productos -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 py-6">



        <!-- Producto 1 -->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <div class="flex justify-between items-start mb-3">
                <h2 class="text-xl font-semibold text-gray-800">Teclado Mecánico Gamer</h2>
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    14 en stock
                </span>
            </div>
            
            <div class="space-y-2 mb-4">
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">SKU:</span> #190198654328
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Categoría:</span> Equipo de computo y accesorios
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Fabricante:</span> Redragon
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Modelo:</span> K552 Kumara
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Precio:</span> 
                    <span class="font-bold text-[#0E247B]">$600.00</span>
                </p>
            </div>
            
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                Teclado mecánico 60% con switches Outemu Blue y retroiluminación RGB.
            </p>
                
            <div class="flex gap-3 mt-4">
                <button onclick="document.location='Detalle_producto.php?id=2'" 
                        class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Ver detalle
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Eliminar
                </button>
            </div>
        </div>

        <!-- Producto 2-->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <div class="flex justify-between items-start mb-3">
                <h2 class="text-xl font-semibold text-gray-800">Ventilador Cooler Laptop</h2>
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    30 en stock
                </span>
            </div>
            
            <div class="space-y-2 mb-4">
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">SKU:</span> #190198654331
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Categoría:</span> Equipo de computo y accesorios
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Fabricante:</span> KLIM
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Modelo:</span> Wind
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Precio:</span> 
                    <span class="font-bold text-[#0E247B]">$180.00</span>
                </p>
            </div>
            
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                Base refrigeradora con 4 ventiladores USB para laptops.
            </p>
                
            <div class="flex gap-3 mt-4">
                <button onclick="document.location='Detalle_producto.phpid=3'" 
                        class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Ver detalle
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Eliminar
                </button>
            </div>
        </div>

        <!-- Producto 3-->
        <div class="bg-white p-6 shadow-lg rounded-2xl border hover:shadow-xl transition">
            <div class="flex justify-between items-start mb-3">
                <h2 class="text-xl font-semibold text-gray-800">Cargador Rápido 25W</h2>
                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    Bajo stock
                </span>
            </div>
            
            <div class="space-y-2 mb-4">
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">SKU:</span> #190198654323
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Categoría:</span> Accesorios
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Fabricante:</span> Anker
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Modelo:</span> A2663
                </p>
                <p class="text-gray-600">
                    <span class="text-gray-400 font-medium">Precio:</span> 
                    <span class="font-bold text-[#0E247B]">$150.00</span>
                </p>
            </div>
            
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                Cargador rápido con tecnología PowerIQ 3.0.
            </p>
                
            <div class="flex gap-3 mt-4">
                <button onclick="document.location='Detalle_producto.php?id=4'" 
                        class="flex-1 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                ver detalle
                </button>
                <button class="flex-1 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Eliminar
                </button>
            </div>
        </div>

    </div>

</div>

</body>
</html>