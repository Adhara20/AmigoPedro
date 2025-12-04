<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<body class="bg-cover bg-no-repeat bg-center min-h-screen"
      style="background-image: url('imagen/fondo.webp');">

<div class="md:hidden fixed inset-0 bg-white -z-10"></div>

<div class="flex min-h-screen flex-col justify-center px-6 py-20">

    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center gap-4">
        <img src="img/logoInvertido.jpg" alt="Logo" class="h-20">
        <h2 class="text-2xl font-bold text-gray-900">Editar producto</h2>
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">

            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Nombre del producto </label>
                <input type="text"
                       class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                              focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                              placeholder:text-gray-400 transition duration-150"
                       value="Audifonos" required>
            </div>

            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Descripción del producto </label>
                <textarea rows="4"
                          class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 resize-y min-h-[100px]
                                 focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                 placeholder:text-gray-400 transition duration-150"
                          required>Audifonos con alta calidad HD full 4k pro con 100 de volumen, irrompibles y carga infinita</textarea>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Código de producto (GTIN) </label>
                    <input type="text"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="8437558160023" required>
                </div>
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Categoría </label>
                    <select class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                   focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                   bg-white cursor-pointer transition duration-150 hover:border-gray-400">
                        <option value="0">Selecciona una categoría</option>
                        <option value="1">Teléfonos</option>
                        <option value="2">Refacciones</option>
                        <option value="3">Audio y video</option>
                        <option value="4">Equipo de cómputo y accesorios</option>
                        <option value="5">Electrónica para el hogar</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Precio de venta </label>
                    <input type="number"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="500" min="0" required>
                </div>
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Precio de costo </label>
                    <input type="number"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="200" min="0" required>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Stock </label>
                    <input type="number"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="300" min="0" required>
                </div>
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Stock mínimo </label>
                    <input type="number"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="1" min="0" required>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Fabricante </label>
                    <input type="text"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="Samsung" required>
                </div>
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Modelo </label>
                    <input type="text"
                           class="block w-full px-3 py-2 text-base rounded-md border border-gray-300
                                  focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                                  placeholder:text-gray-400 transition duration-150"
                           value="Redmi Note 9s" required>
                </div>
            </div>

            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Imagen del producto</label>
                <input type="file" 
                       id="product-image"
                       name="product-image"
                       accept=".jpg,.jpeg,.png,.gif,.webp"
                       class="block w-full text-sm text-gray-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-md file:border-0
                              file:text-sm file:font-semibold
                              file:bg-[#0E247B] file:text-white
                              hover:file:bg-[#122E9B] file:cursor-pointer
                              file:transition file:duration-150">
            </div>

            <div class="flex gap-4 pt-2">

                <button 
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-red-600 border border-red-600
                           hover:bg-red-700
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Cancelar
                </button>
                
                <button 
                    class="w-1/2 py-3 px-4 text-lg font-semibold text-white
                           bg-[#0E247B] border border-[#0E247B]
                           hover:bg-[#122E9B]
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg"
                           >
                           <a href="Lista_producto.php">
                                Guardar cambios
                           </a>
                    
                </button>

            </div>

        </form>
    </div>

</div>

</body>
</html>
