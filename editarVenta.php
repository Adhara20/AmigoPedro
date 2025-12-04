<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
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
        <h2 class="text-2xl font-bold text-gray-900">Editar Venta</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33] space-y-6">

        <!-- ID de Venta (no editable) -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">ID Venta</label>
            <input type="text" 
                   class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                          bg-gray-100 text-gray-700"
                   value="#VTA001"
                   readonly>
        </div>

        <!-- Cliente -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">Cliente</label>
            <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                <option value="1" selected>Juan Pérez</option>
                <option value="2">María García</option>
                <option value="3">Carlos López</option>
                <option value="4">Ana Martínez</option>
                <option value="5">Pedro Rodríguez</option>
            </select>
        </div>

        <!-- Fecha y Hora -->
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full md:w-1/2">
                <label class="block text-md font-medium text-gray-700 mb-1">Fecha</label>
                <input type="date"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent"
                    value="2024-03-15">
            </div>
            
            <div class="w-full md:w-1/2">
                <label class="block text-md font-medium text-gray-700 mb-1">Hora</label>
                <input type="time"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent"
                    value="14:30">
            </div>
        </div>

        <!-- Producto -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">Producto</label>
            <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                <option value="1" selected>Teclado Mecánico Gamer - Redragon K552 Kumara</option>
                <option value="2">Ventilador Cooler Laptop - KLIM Wind</option>
                <option value="3">Cargador Rápido 25W - Anker A2663</option>
                <option value="4">Audífonos Bluetooth - Sony WH-1000XM4</option>
                <option value="5">Smartphone Samsung - Galaxy S21</option>
            </select>
        </div>

        <!-- SKU -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">SKU</label>
            <input type="text" 
                   class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                          bg-gray-100 text-gray-700"
                   value="190198654328"
                   readonly>
        </div>

        <!-- Cantidad y Precio Unitario -->
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full md:w-1/2">
                <label class="block text-md font-medium text-gray-700 mb-1">Cantidad</label>
                <input type="number"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent"
                    min="1"
                    value="2">
            </div>
            
            <div class="w-full md:w-1/2">
                <label class="block text-md font-medium text-gray-700 mb-1">Precio Unitario</label>
                <input type="number"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent"
                    step="0.01"
                    min="0"
                    value="600.00">
            </div>
        </div>

        <!-- Total -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">Total</label>
            <input type="text" 
                   class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                          bg-gray-100 font-bold text-lg text-[#0E247B]"
                   value="$1,200.00"
                   readonly>
        </div>

        <!-- Método de Pago -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">Método de Pago</label>
            <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                <option value="efectivo" selected>Efectivo</option>
                <option value="tarjeta">Tarjeta de crédito/débito</option>
                <option value="transferencia">Transferencia bancaria</option>
                <option value="paypal">PayPal</option>
                <option value="credito">Crédito</option>
            </select>
        </div>

        <!-- Estado -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">Estado</label>
            <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                <option value="completada" selected>Completada</option>
                <option value="pendiente">Pendiente</option>
                <option value="cancelada">Cancelada</option>
                <option value="reembolsada">Reembolsada</option>
            </select>
        </div>

        <!-- Observaciones -->
        <div>
            <label class="block text-md font-medium text-gray-700 mb-1">Observaciones</label>
            <textarea class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                resize-y min-h-[100px]"
                rows="4">Cliente satisfecho con el producto. Pago completo en efectivo. Se entregó con todos los accesorios incluidos.</textarea>
        </div>

        <!-- BOTONES -->
        <div class="flex gap-4 pt-4">
            <button type="button" onclick="window.location.href='detalle_venta.php'"
                class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                       bg-red-600 border border-red-600
                       hover:bg-red-700
                       transition duration-200 shadow-md hover:shadow-xl active:scale-95
                       rounded-lg">
                Cancelar
            </button>
            
            <button type="button" onclick="window.location.href='Lista_ventas.php'"
                class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                       bg-[#0E247B] border border-[#0E247B]
                       hover:bg-[#122E9B]
                       transition duration-200 shadow-md hover:shadow-xl active:scale-95
                       rounded-lg">
                Guardar Cambios
            </button>
        </div>

    </div>

</div>

</body>
</html>