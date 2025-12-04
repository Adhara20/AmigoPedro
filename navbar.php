<nav class="bg-[#0E247B] shadow-lg fixed w-full top-0 z-50">
    <div class="w-full px-4">
        <div class="flex justify-between items-center h-16">

            <!-- Comienzo del logo y menú de hamburgesa -->
            <div class="flex items-center">
                <button id="menuBtn" onclick="abrirMenu()" class="mr-4 text-white hover:text-gray-500 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <img class="size-14" src="img/logoAmigoPedro.jpg" alt="logoAmigoPedro">
                <h2 class="text-white font-semibold text-2xl ml-2">El Amigo Pedro</h2>
            </div>
            <!-- Fin del logo y menú de hamburgesa -->

            <!-- Inicio del nombre de usuario -->
            <div class="flex items-center space-x-4 ml-auto">
                <div class="bg-gradient-to-r from-pink-500 to-blue-500 h-10 w-10 flex justify-center items-center text-gray-200 rounded-full">
                    YOU
                </div>
                <h1 class="text-white font-bold">NOMBRE USUARIO</h1>
            </div>
            <!-- Fin del nombre de usuario -->

        </div>
    </div>
</nav>

 <!-- overlay (fondo oscuro) -->
    <div id="overlay" onclick="cerrarMenu()" class="hidden fixed inset-0 bg-black opacity-50"></div>
    <!-- Menú lateral -->
    <aside id="sidebar"
    class="fixed left-0 top-0 h-full w-64 bg-white shadow-xl transform -translate-x-full transition-transform">
        <div class="p-6">
            <!-- Título y boton cerrar -->
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2x1 font-bold text-blue-600 mt-20">Menú</h2>
                <button onclick="cerrarMenu()" class="text-gray-700 hover:text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Opciones del menú -->
            <nav class="space-y-2">
                <a href="inicio.php"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700">Inicio</a>
                <a href="lista_Producto.php"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700">Productos</a>
                </a>
                <a href="listaClientes.php"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700">Clientes</a>
                </a>
                <a href="listaEspacios.php"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700">Espacios</a>
                </a>
                <a href="configuracion.php"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700">Configuración</a>
                </a>
            </nav>
        </div>
    </aside>
    <script>
        //abrir menú lateral
        function abrirMenu() {
            document.getElementById('sidebar').classList.remove('-translate-x-full');
            document.getElementById('overlay').classList.remove('hidden');
        }
        //cerrar menú lateral
        function cerrarMenu() {
            document.getElementById('sidebar').classList.add('-translate-x-full');
            document.getElementById('overlay').classList.add('hidden');
        }
    </script>