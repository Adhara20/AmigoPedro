<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
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
        <h2 class="text-2xl font-bold text-gray-900">Registrar un nuevo producto</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">

            <!-- Nombre del producto -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Nombre del producto</label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Audifonos" required>
            </div>

            <!-- Descripcion -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Descripcion del producto</label>
                <textarea name="" id="" placeholder="Descripcion del producto" class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                    focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                    placeholder:text-gray-400 transition duration-150
                    resize-y min-h-[100px]"
                    rows="4"></textarea>
            </div>

            <!-- div para que estos inputs salgan juntos uwu -->
            <div class="flex flex-col md:flex-row gap-4">
               <!-- Codigo de producto -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Codigo de producto (GTIN)</label>
                    <input type="text"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                            focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                            placeholder:text-gray-400 transition duration-150"
                        placeholder="8437558160023" required>
                        <!-- ese numero lo copieeeee de esto que investigue xdxd: código GTIN (Número Global de Identificación de Productos), 
                        que es un estándar internacional utilizado para identificar productos de forma única. -->
                </div>

                <!-- Categoria select -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Categoria</label>
                    <select name="" id="" class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                        focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                        bg-white  cursor-pointer transition duration-150
                        hover:border-gray-400">
                        <option value="0">Selecciona una categoria</option>
                        <option value="1">Telefonos</option>
                        <option value="2">Refacciones</option>
                        <option value="3">Audio y video</option>
                        <option value="4">Equipo de computo y accesorios</option>
                        <option value="5">Electronica para el hogar</option>
                    </select>
                </div> 
            </div>

            <!-- div paraaaa los precios -->
            <div class="flex flex-col md:flex-row gap-4">
               <!--Precio de venta -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Precio de venta</label>
                    <input type="number"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                            focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                            placeholder:text-gray-400 transition duration-150"
                            placeholder="500"
                         required min="0">
                </div> 
                <!--Precio de costo  -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Precio de costo</label>
                    <input type="number"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                            focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                            placeholder:text-gray-400 transition duration-150"
                         required min="0" placeholder="200">
                </div> 
            </div>

            <!-- div paraaaaaaaa lo del stock -->
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Cantidad en stock -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Stock</label>
                    <input type="number"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                            focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                            placeholder:text-gray-400 transition duration-150"
                         required min="0" 
                         placeholder="300">
                </div>
                <div class="w-full md:w-1/2">
                    <!-- Stock minimo (para mandar alertas cuando esteee a este nivel) -->
                    <label class="block text-md font-medium text-gray-700 mb-1">Stock minimo</label>
                    <input type="number"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                            focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                            placeholder:text-gray-400 transition duration-150"
                         required min="0"
                         placeholder="1">
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <!-- Marca/fabricante -->
                <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Fabricante</label>
                    <input type="text"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                            focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                            placeholder:text-gray-400 transition duration-150"
                        placeholder="Samsung" required>
                        
                </div>
                <!-- Modelooo -->
                 <div class="w-full md:w-1/2">
                    <label class="block text-md font-medium text-gray-700 mb-1">Modelo</label>
                    <input type="text"
                        class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                            focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                            placeholder:text-gray-400 transition duration-150"
                        placeholder="Redmin note 9s" required>
                       
                </div>
            </div>
           
            <!-- imagen del producto/ esto si lo copie completamente de la ia xd -->
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
