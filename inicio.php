<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Minerva Librery</title>
    <link rel="stylesheet" href="src/output.css">

</head>
<?php include('navbar.php');
?>

<!-- con una clase y un color de fondo cambiamos el color de todo el cuerpo -->
    <style>
    /* Pantalla normal */
    body{
        background-image: url(imagen/fDef.webp);
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

<body class="bg-gray-100">
    

    <!-- CONTENIDO PRINCIPAL -->
    <main class="p-8">
        <h1 class="text-3xl font-bold mb-6 mt-10 text-blue-300">Página principal</h1>

        <div class="grid grid-cols-3 gap-5">
            <div class="bg-white p-4 rounded shadow">Tarjeta 1</div>
            <div class="bg-white p-4 rounded shadow">Tarjeta 2</div>
            <div class="bg-white p-4 rounded shadow">Tarjeta 3</div>
        </div>
    </main>
</body>

</html>