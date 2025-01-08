<?php

    if(!isset($_SESSION['biblioteca'])){
        $biblioteca = new Biblioteca();
    }

    class Llibre {
        public string $titol;
        public string $autor;
        public int $anyPublicacio;
        public string $foto;

        public function __construct(string $titol, string $autor, int $anyPublicacio, string $foto) {
            $this->titol = $titol;
            $this->autor = $autor;
            $this->anyPublicacio = $anyPublicacio;
            $this->foto = $foto;
        }
        public function mostrarDetailes () {
            return $this->titol . ' de ' . $this->autor . ',' . $this->anyPublicacio;
        }
    }

    class Biblioteca {
        public $libros = [];
        public function AfegirLlibre () {
            //  permet afegir un llibre a la col·lecció.

            // push al array libros, this->libros , hacerle push la instantcia creada de la clase libro
            
        }
        public function MostrarLlibres () {
            // retorna una llista amb els llibres actuals de la biblioteca.

        }
        public function CercarLlibre ($title) {
            // permet buscar un llibre que contingui un text determinat en el títol (no és necessari que sigui exacte).

        }
    }

    // if (isset($_SERVER["REQUEST_METHOD"] == "GET")) {
        
    // }


    function verPagina () {
        $pagina = isset($_GET['page']) ? $_GET['page'] : 'list';

        switch($pagina) {
            case 'addBook':
                return "
                <form action='' class='max-w-sm mx-auto method='GET''>
                    <div class='mb-5'>
                        <label for='title'>Título</label>
                        <input type='text' id='title' name='title' class='block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900' required> 
                    </div>
                    <div class='mb-5'>
                        <label for='author'>Nombre del Autor</label>
                        <input type='text' id='author' name='author' class='block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900' required> 
                    </div>
                    <div class='mb-5'>
                        <label for='year'>Año de Publicación</label>
                        <input type='number' id='year' name='year' class='block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900' placeholder='2000' min='0' required> 
                    </div>
                    <div class='mb-5'>
                        <label for='url'>URL Imagen</label>
                        <input type='url' id='url' name='url' class='block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900' required> 
                    </div>
                    <button type='submit' class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>Añadir Libro</button>
                </form>";
            case 'searchBook':
                return "
                <form action='' class='max-w-sm mx-auto my-10'>
                    <div class='mb-5'>
                        <label for='search'>Buscar Por Título</label>
                        <input type='search' id='search' name='search' class='block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900' required> 
                    </div>
                    <button type='submit' class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>Buscar Libro</button>
                </form>";
            case 'listBooks':
                // retornar listado del array de libros como cards
                return "
                    <div class='max-w-sm rounded overflow-hidden shadow-lg'>
                        <img class='w-full' src='' alt='Sunset in the mountains'>
                        <div class='px-6 py-4'>
                            <div class='font-bold text-xl mb-2 title-book'></div>
                            <p class='text-gray-700 text-base'>
                                Autor: 
                            </p>
                            <p class='text-gray-700 text-base'>
                                Año: 
                            </p>
                        </div>
                    </div>";
            
        }
        
    }

    // usar sesiones para almacenar los libros 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto">

        <!-- Menú -->
        <h1 class="text-4xl text-center my-5">Biblioteca</h1>
        <ul class="flex">
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-800" href="?page=addBook">Añadir Libro</a>
            </li>
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-800" href="?page=listBooks">Ver Libros</a>
            </li>
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-800" href="?page=searchBook">Buscar Libro</a>
            </li>
        </ul>

        <div class="py-5 mt-5">
            <?php
                echo verPagina();
            ?> 
        </div>
    </div>    
</body>
</html>