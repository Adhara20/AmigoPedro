<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-white">

<div class="max-w-7xl mx-auto space-y-6 py-20 px-4 sm:px-6 lg:px-8">

    <!-- Encabezado -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center gap-4">
            <h1 class="text-4xl font-bold text-[#0d1c57]">Ventas</h1>
            <!-- Botón Agregar -->
            <a href="Form_ventas.php" class="py-2 px-4 bg-green-100 text-green-400 rounded-lg shadow-md border text-green-400 font-bold
            hover:bg-green-400 hover:text-green-100 transition duration-200">
                + Nueva Venta
            </a>
        </div>

        <input 
            type="text"
            placeholder="Buscar venta por cliente, producto o ID..."
            class="px-4 py-2 border rounded-lg w-full 
                   sm:w-80 md:w-96 lg:w-[28rem]
                   focus:outline-none focus:ring-2 focus:ring-[#0E247B]"
        >
    </div>

    <!-- Tabla de ventas -->
    <div class="bg-white rounded-2xl shadow-lg border overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID Venta
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Cliente
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha y Hora
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Producto(s)
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Método de Pago
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    
                    <!-- Venta 1 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#VTA001</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Juan Pérez</div>
                            <div class="text-xs text-gray-500">juan@email.com</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2024-03-15</div>
                            <div class="text-xs text-gray-500">14:30:05</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Teclado Mecánico Gamer</div>
                            <div class="text-xs text-gray-500">Redragon K552 Kumara</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2 unidades</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-[#0E247B]">$1,200.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                Efectivo
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completada
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="detalle_venta.php" class="text-blue-600 hover:text-blue-900 mr-3">
                                Ver
                            </a>
                            <button class="text-red-600 hover:text-red-900">
                                Cancelar
                            </button>
                        </td>
                    </tr>

                    <!-- Venta 2 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#VTA002</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">María García</div>
                            <div class="text-xs text-gray-500">maria@email.com</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2024-03-14</div>
                            <div class="text-xs text-gray-500">10:15:22</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Ventilador Cooler Laptop</div>
                            <div class="text-xs text-gray-500">KLIM Wind</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">1 unidad</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-[#0E247B]">$180.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                Tarjeta
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pendiente
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="detalle_venta.php" class="text-blue-600 hover:text-blue-900 mr-3">
                                Ver
                            </a>
                            <button class="text-red-600 hover:text-red-900">
                                Cancelar
                            </button>
                        </td>
                    </tr>

                    <!-- Venta 3 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#VTA003</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Carlos López</div>
                            <div class="text-xs text-gray-500">carlos@email.com</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2024-03-13</div>
                            <div class="text-xs text-gray-500">16:45:33</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Cargador Rápido 25W</div>
                            <div class="text-xs text-gray-500">Anker A2663</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">3 unidades</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-[#0E247B]">$450.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-teal-100 text-teal-800">
                                Transferencia
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Cancelada
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="detalle_venta.php" class="text-blue-600 hover:text-blue-900 mr-3">
                                Ver
                            </a>
                            <button class="text-gray-600 hover:text-gray-900">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <!-- Venta 4 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#VTA004</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Ana Martínez</div>
                            <div class="text-xs text-gray-500">ana@email.com</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2024-03-12</div>
                            <div class="text-xs text-gray-500">09:20:15</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Múltiples productos</div>
                            <div class="text-xs text-gray-500">5 items diferentes</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">5 items</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-[#0E247B]">$2,150.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                PayPal
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Completada
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="detalle_venta.php" class="text-blue-600 hover:text-blue-900 mr-3">
                                Ver
                            </a>
                            <button class="text-red-600 hover:text-red-900">
                                Cancelar
                            </button>
                        </td>
                    </tr>

                    <!-- Venta 5 -->
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">#VTA005</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Pedro Rodríguez</div>
                            <div class="text-xs text-gray-500">pedro@email.com</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2024-03-11</div>
                            <div class="text-xs text-gray-500">11:10:45</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">Audífonos Bluetooth</div>
                            <div class="text-xs text-gray-500">Sony WH-1000XM4</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">1 unidad</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-[#0E247B]">$850.00</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                Crédito
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                En crédito
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="detalle_venta.php" class="text-blue-600 hover:text-blue-900 mr-3">
                                Ver
                            </a>
                            <button class="text-red-600 hover:text-red-900">
                                Cancelar
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        <!-- Paginación -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Mostrando
                        <span class="font-medium">1</span>
                        a
                        <span class="font-medium">5</span>
                        de
                        <span class="font-medium">12</span>
                        ventas
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            Anterior
                        </a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            1
                        </a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-50 text-sm font-medium text-blue-600">
                            2
                        </a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            3
                        </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            Siguiente
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
