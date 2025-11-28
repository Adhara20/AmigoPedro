<!DOCTYPE html>
<html lang="es" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <link rel="stylesheet" href="src/output.css">
</head>

<body>

    <?php include ('navbar.php'); ?>

    <!-- Contenido -->
    <main class="pt-20 px-4 pb-8">
        <div class="mx-auto py-8 max-w-2xl">
            <!-- Título -->
            <h1 class="text-3xl font-bold mb-8 mt-3">Configuración</h1>

            <!-- card principal  -->
            <div class="bg-white rounded-lg shadow-lg p-6 space-y-6">
                <!-- sección de perfil -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-xl font-bold mb-4">Perfil</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Nombre Completo:</label>
                            <input type="text" value="Adhara Pérez" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Correo:</label>
                            <input type="email" value="adharaperez@gmail.com" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>
                <!-- terminacion de perfil -->

                 <!-- Privacidad-->
                  <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-xl font-bold mb-4">Privacidad</h2>
                        <div class="space-y-4">
                            <div class="flex">
                                <label class="block text-sm font-medium text-gray-400 mb-2">Perfil Público</label>
                                <input type="checkbox" class="ml-2 mb-2 p-2 border border-gray-300 rounded-md">
                            </div>
                       </div>
                    </div>

                    <!-- Tema -->
                     <!-- Privacidad y Temas -->
                  <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-xl font-bold mb-4">Tema</h2>
                        <div class="space-y-4">
                            <div class="flex">
                                <label class="block text-sm font-medium text-gray-400 mb-2">Dark Mode</label>
                                <input type="checkbox" class="ml-2 mb-2 p-2 border border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
            </div><!-- Cierre de card principal  -->

            <!-- Botones -->
            <div class="flex pt-4 gap-4">
                <button class="w-1/2 justify-center rounded-md bg-blue-700 px-3 py-1.5 text-sm/6 font-semibold
                     text-white hover:bg-purple-300">
                    Guardar Cambios
                </button>
                <button class="w-1/2 justify-center rounded-md bg-purple-700 px-3 py-1.5 text-sm/6 font-semibold
                     text-white hover:bg-purple-300">
                    Cancelar
                </button>
            </div>

        </div>
    </main>

</body>

</html>