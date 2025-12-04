<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
    <?php include ('navbar.php'); ?>

    <main class="pt-20 px-4 pb-8">
        <div class="mx-auto py-8 max-w-2xl">

            <h1 class="text-3xl font-bold mb-8 mt-3">Pagos</h1>

            <div class="bg-white rounded-lg shadow-2xl p-6 space-y-6">
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-xl font-bold mb-4">Ingresa.-</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-800 mb-2">Producto:</label>
                            <input type="number" value="" class="w-full p-2 border border-gray-300 rounded-md bg-gray-300 select-none" readonly placeholder="Audifonos, Telefono...">
                        </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-800 mb-2">Tipo de Pago:</label>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            Tarjeta: <input type="radio" name="tipoPago" value="tarjeta">
                        </label>
                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            Efectivo: <input type="radio" name="tipoPago" value="efectivo">
                        </label>
                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            Transferencia: <input type="radio" name="tipoPago" value="transferencia">
                        </label>
                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            Cheques: <input type="radio" name="tipoPago" value="cheques">
                        </label>
                    </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-800 mb-2">Cantidad:</label>
                            <input type="number" value="" class="w-full p-2 border border-gray-300 rounded-md" placeholder="0">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-800 mb-2">precio:</label>
                            <input type="number" value="" class="w-full p-2 border border-gray-300 rounded-md" placeholder="$0000.00">
                        </div>
                    </div>
                </div>
                
                <!-- Botones -->
            <div class="flex pt-4 gap-4">
                <button class="w-1/2 flex justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-600">
                    Cancelar
                </button>

                <button class="w-1/2 flex justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-600">
                    Guardar Cambios
                </button>
                </div>

            </div>
        
        </div>
    </main>

</body>
</html>