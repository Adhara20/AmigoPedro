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
            <h2 class="text-center text-2xl">Bienvenido a Minerva Librery</h2>
        </div>
        <!-- Fin imagen -->
         <!-- Inicio div Formulario -->
         <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="">
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
                <!-- Final del div contraseña -->
                 <div class="mt-4 flex">
                    <h1 class="font-semibold text-black">¿Olvidaste tu contraseña? </h1>
                    <a href="" class="font-semibold text-black  hover:text-blue-300"> Recupera aquí</a>
                 </div>
                 <!-- Cierre div 3 -->
                  <div class="mt-2">
                    <button class="flex w-full justify-center rounded-md bg-purple-700 px-3 py-1.5 text-sm/6 font-semibold
                     text-white hover:bg-purple-300">
                        Iniciar Sesión
                  </button>

                  </div>
                  <p class="mt-2 mb-2 text-center">o</p>
</form>   
         </div>
         <!-- Cierre deiv Formularui -->
          <div class="mt-2">
                    <button class="flex w-full justify-center rounded-md  hover:bg-blue-300">
                        <img class="rounded-md" style="height: 50px" src="imagen/g.jpg" alt="">
                  </button>
                  </div>
                  <p class="text-purple-400 mt-10 text-center text-sm/6">¿No tienes cuenta? 
                    <a class="font-semibold hover:text-blue-400" href="registro.html" > Registrate</a></p>
     </div>
     <!-- final Formulario -->
</body>
</html>