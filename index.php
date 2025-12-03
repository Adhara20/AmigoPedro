
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="src/output.css" rel="stylesheet">
</head>

<style>
    body {
        position: relative;
        overflow-x: hidden;
    }

    /* Fondo con opacidad */
    body::before {
        content: "";
        position: fixed;
        inset: 0; /* top, right, bottom, left = 0 */
        background-image: url('img/fondo.webp');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.3;       /* Aquí ajusto la opacidad*/
        z-index: -1;        /* Para se se vea debajo del contenido*/
    }

    /* Movil: Quitamos fondo y que sea blanco*/
    @media (max-width: 768px) {
        body::before {
            display: none;
        }

        body {
            background-color: white;
        }
    }
</style>


<!-- Fondo blanco en móvil -->
<div class="md:hidden fixed inset-0 bg-white -z-10"></div>

<div class="flex min-h-screen flex-col justify-center px-6 py-20">

    <!-- Logo + título en línea -->
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center gap-4">
        <img src="img/logoInvertido.jpg" class="h-20 w-20 rounded-2xl border-4 border-blue-600">
        <h2 class="text-2xl font-bold text-gray-900"> Iniciar Sesion</h2>
    </div>

    <!-- Contenedor del formulario -->
    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-lg bg-white/80 backdrop-blur 
                p-8 rounded-2xl shadow-2xl border border-[#0E247B33]">

        <form class="space-y-6">

            <!-- Nombre -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Nombre de Usuario<span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="text"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Usuario" required>
            </div>

            <!-- Pass -->
            <div>
                <label class="block text-md font-medium text-gray-700 mb-1">Contraseña<span class="text-red-500 mb-2 font-bold"> * </span></label>
                <input type="password"
                    class="block w-full px-3 py-2 text-base rounded-md border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-[#0E247B] focus:border-transparent
                           placeholder:text-gray-400 transition duration-150"
                    placeholder="Contraseña" required>
            </div>

            

            <!-- BOTONES EN UNA LÍNEA -->
            <div class="items-center">
                
                <!-- Botón Registrar -->
                <button onclick="window.location.href='inicio.php'"
                    class="w-full py-3 px-4 text-lg font-semibold text-white
                           bg-[#0E247B] border border-[#0E247B]
                           hover:bg-[#122E9B]
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg">
                    Iniciar
                </button>

                <p class="text-center text-lg">o</p>

                <!-- Botón Google -->
                <button onclick="window.location.href='inicio.php'"
                    class="w-full py-3 px-4 text-lg font-semibold text-black
                           bg-white border border-gray-400
                           hover:bg-gray-200
                           transition duration-200 shadow-md hover:shadow-xl active:scale-95
                           rounded-lg flex items-center justify-center gap-3">
                    <img src="img/google-logo.webp" 
                         alt="Logo Google" 
                         class="w-6 h-6 !max-w-none !max-h-none object-contain">
                    <span>Iniciar con Google</span>
                </button>


            </div>

        </form>
    </div>

</div>

</body>
</html>
