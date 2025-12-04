<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Venta</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-cover bg-no-repeat bg-center min-h-screen"
      style="background-image: url('imagen/fondo.webp');">

<div class="md:hidden fixed inset-0 bg-white -z-10"></div>

<div class="flex min-h-screen flex-col justify-center px-6 py-20">

    <!-- Logo + título en línea -->
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center gap-4">
        <img src="img/logoInvertido.jpg" alt="Logo" class="h-20">
        <h2 class="text-2xl font-bold text-gray-900">Registrar nueva venta</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">

            <!-- Cliente/Usuario -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Cliente / Usuario</label>
                <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                    <option value="">Seleccione un cliente</option>
                    <option value="1">Juan Pérez</option>
                    <option value="2">María García</option>
                    <option value="3">Carlos López</option>
                    <option value="4">Ana Martínez</option>
                </select>
            </div>

            <!-- Fecha y hora -->
            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Fecha de venta</label>
                    <input type="date"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                               focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                               transition duration-150">
                </div>
                
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Hora de venta</label>
                    <input type="time"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                               focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                               transition duration-150">
                </div>
            </div>

            <!-- Producto a vender -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Producto</label>
                <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                    <option value="">Seleccione un producto</option>
                    <option value="1">Teclado Mecánico Gamer - Redragon K552 Kumara</option>
                    <option value="2">Ventilador Cooler Laptop - KLIM Wind</option>
                    <option value="3">Cargador Rápido 25W - Anker A2663</option>
          
                </select>
            </div>

            <!-- Detalles de la venta -->
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Cantidad -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Cantidad</label>
                    <input type="number"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                               focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                               placeholder:text-gray-400 transition duration-150"
                        placeholder="1"
                        min="1">
                </div>
                
                <!-- Precio unitario -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Precio unitario ($)</label>
                    <input type="number"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                               focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                               placeholder:text-gray-400 transition duration-150"
                        placeholder="0.00"
                        step="0.01"
                        min="0">
                </div>
            </div>

            <!-- Total -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Total de la venta ($)</label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-gray-50 font-bold text-lg"
                    value="$ 0.00"
                    readonly>
            </div>

            <!-- Método de pago -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Método de pago</label>
                <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                    <option value="">Seleccione método de pago</option>
                    <option value="efectivo">Efectivo</option>
                    <option value="tarjeta">Tarjeta de crédito/débito</option>
                    <option value="transferencia">Transferencia bancaria</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            <!-- Estado de la venta -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Estado de la venta</label>
                <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           bg-white cursor-pointer transition duration-150">
                    <option value="completada">Completada</option>
                    <option value="pendiente">Pendiente</option>
                    <option value="cancelada">Cancelada</option>
                </select>
            </div>

            <!-- Observaciones -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Observaciones / Notas</label>
                <textarea class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                    focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                    placeholder:text-gray-400 transition duration-150
                    resize-y min-h-[100px]"
                    rows="4"
                    placeholder="Notas adicionales sobre la venta..."></textarea>
            </div>

            <!-- BOTONES EN UNA LÍNEA -->
            <div class="flex gap-4 pt-2">
                <!-- Botón Cancelar -->
                <a href="Lista_ventas.php"
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white text-center
                           bg-red-600 border border-red-600
                           hover:bg-red-700
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Cancelar
                </a>
                
                <!-- Botón Registrar Venta -->
                <button type="button"
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-[#0E247B] border border-[#0E247B]
                           hover:bg-[#122E9B]
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Registrar Venta
                </button>
            </div>

        </form>
    </div>

</div>

</body>
</html>