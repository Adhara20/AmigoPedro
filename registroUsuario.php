<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
     <link href="src/output.css" rel="stylesheet">
</head>
<!-- npx @tailwindcss/cli -i css/tailwind.css -o src/output.css --watch -->
 <style>
    /* Pantalla normal */
    body{
        background-image: url(imagen/fondo.webp);
        background-repeat: no-repeat;
        background-size: cover;
    }
    /* Ocultar fondo para movil */
    @media (max-width: 768px){
        body{
        background-image: none;
        background-color: white;
    }
    }
 </style>
<body>
    <!-- Cuerpo de Formulario -->
     <div class="flex min-h-full flex-col justify-center px-6 py-12 lg: px-8">
      <!-- Inicsio de imagen -->
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="imagen/lechuzaIluminadaLuna.jpg" alt="Logo" class="h-20 mx-auto">
            <h2 class="text-center text-2xl">Registrarse en Minerva Librery</h2>
        </div>
        <!-- Fin imagen -->
         <!-- Inicio div Formulario -->
         <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="">
        
            <div class="mt-2 flex gap-4">
                    <!-- <div class="mt-2"> -->
                    
                <!-- </div> -->
                <div class="w-1/2">
                    <label for="nombre" class=" text-sm/6 font-medium text-black">Nombre</label>
                    <input type="text" class="block w-full rounded-md outline-1 outline-offset-1 outline-black" 
                    placeholder="Nombre..." required>
                </div>
                <!-- Fin nombre -->
                        <!-- <div class="mt-2"> -->
                <!-- </div> -->
                <div class="w-1/2">
                    <label for="apellido" class=" text-sm/6 font-medium text-black">Apellido</label>
                    <input type="text" class=" block w-full rounded-md outline-1 outline-offset-1 outline-black" 
                    placeholder="Apellido..." required>
                </div>

            </div>
                <!-- fin Apellido -->
                <div class="mt-2">
                    <label for="email" class="block text-sm/6 font-medium text-black">Correo</label>
                </div>
                <div>
                    <input type="email" class="block w-full rounded-md outline-1 outline-offset-1 outline-black" 
                    placeholder="ejemplo@gmail.com" required>
                </div>
                <!-- Final del div correo -->
                 <div class="mt-2">
                    <label for="password" class="block text-sm/6 font-medium text-black" >Contraseña</label>
                </div>
                <div>
                    <input type="password" class="block w-full rounded-md outline-1 outline-offset-1 outline-black" 
                    placeholder="Contraseña" required>
                </div>
                <!-- Final del div contraseña2 -->
                 <div class="mt-2">
                    <label for="password" class="block text-sm/6 font-medium text-black" >Confirmar tu Contraseña</label>
                </div>
                <div>
                    <input type="password" class="block w-full rounded-md outline-1 outline-offset-1 outline-black" 
                    placeholder="Contraseña" required>
                </div>
                 <!-- Cierre div 3 -->
                  <div class="mt-2">
                    <button class="flex w-full justify-center rounded-md bg-purple-700 px-3 py-1.5 text-sm/6 font-semibold
                     text-white hover:bg-purple-300">
                        Registrarme
                  </button>

                  </div>
                  <p class="mt-2 mb-2 text-center">o</p>
                  <div>
                    <button class="flex w-full  rounded-md bg-white px-3 py-1.5
                     text-black hover:bg-gray-100 border-2 text-sm/6 font-semibold">
                        <img src="imagen/google-logo.webp" alt="Logo Google" class="size-8 rounded-md">
                        <span class="justify-center ml-10 mt-1 text-base">Registrarme con Google</span>
                    </button>
                  </div>            
            </form>   
         </div>
         <!-- Cierre deiv Formularui -->
     <!-- final Formulario -->
</body>
</html>