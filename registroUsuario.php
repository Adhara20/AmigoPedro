<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<style>
    /* Fondo en escritorio */
    body {
        background-image: url(imagen/fondo.webp);
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Fondo en móvil */
    @media (max-width: 768px) {
        body {
            background-image: none;
            background-color: white;
        }
    }
</style>

<body>

<div class="flex min-h-screen flex-col justify-center px-6 py-12">

    <!-- Logo + título -->
    <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
        <img src="imagen/lechuzaIluminadaLuna.jpg" alt="Logo" class="h-20 mx-auto">
        <h2 class="mt-4 text-2xl font-bold text-gray-900">Registrar Nuevo Cliente</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-purple-100">

        <form class="space-y-6">

            <!-- Nombre y Apellido -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nombres</label>
                    <input type="text"
                        class="block w-full px-4 py-3 text-lg rounded-md border border-gray-300 
                               focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent
                               placeholder:text-gray-400 transition duration-150"
                        placeholder="Nombre" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Apellidos</label>
                    <input type="text"
                        class="block w-full px-4 py-3 text-lg rounded-md border border-gray-300 
                               focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent
                               placeholder:text-gray-400 transition duration-150"
                        placeholder="Apellido" required>
                </div>
            </div>

            <!-- Correo -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                <input type="email"
                    class="block w-full px-4 py-3 text-lg rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="ejemplo@gmail.com" required>
            </div>

            <!-- Contraseña -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Contraseña</label>
                <input type="password"
                    class="block w-full px-4 py-3 text-lg rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Contraseña" required>
            </div>

            <!-- Confirmar contraseña -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Confirmar Contraseña</label>
                <input type="password"
                    class="block w-full px-4 py-3 text-lg rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Confirmar contraseña" required>
            </div>

            <!-- Botón -->
            <button 
                class="w-full py-5 px-4 text-2xl font-semibold 
                       bg-purple-700 text-white 
                       hover:bg-purple-600 transition duration-200
                       shadow-lg hover:shadow-2xl active:scale-95
                       rounded-3xl border border-purple-800/20
                       overflow-hidden">
                Registrar
            </button>

        </form>
    </div>

</div>

</body>
</html>
