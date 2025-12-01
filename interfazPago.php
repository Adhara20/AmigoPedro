<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Pedro - Pagos</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
    <?php include ('navbar.php'); ?>

    <main class="pt-20 px-4 pb-8">
        <div class="mx-auto py-8 max-w-2xl">

            <h1 class="text-3xl font-bold mb-8 mt-3">Pagos</h1>

            <div class="bg-white rounded-lg shadow-lg p-6 space-y-6">
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-xl font-bold mb-4">Ingresa...</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Tipo de Pago:</label>
                            <input type="text" value="" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Tarjeta, Efectivo, Transferencia, etc">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Cantidad:</label>
                            <input type="number" value="" class="w-full p-2 border border-gray-300 rounded-md" placeholder="$0000.00">
                        </div>
                    </div>
                </div>
                
                <!-- Botones -->
            <div class="flex pt-4 gap-4">
                <button class="w-1/2 flex justify-center rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-800">
                    Guardar Cambios
                </button>
                <button class="w-1/2 flex justify-center rounded-md bg-red-700 px-3 py-2 text-sm font-semibold text-white hover:bg-red-800">
                    Cancelar
                </button>
                </div>

            </div>
        
        </div>
    </main>

</body>
</html>