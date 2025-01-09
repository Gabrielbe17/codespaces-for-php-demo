<?php
    session_start();
    
    include('./classes/Biblioteca.php');
    include('./classes/Llibre.php');
    
    if (!isset($_SESSION['biblioteca']) || !($_SESSION['biblioteca'])) {
        
        //serializar el objeto biblioteca la primera vez, para poder GUARDAR el objeto en la sesión (TRANSFORMAR A TEXTO)
        $_SESSION['biblioteca'] = serialize(new Biblioteca());
    }

    // DESEREALIZAR biblioteca para poder usar sus métodos y atributos, 
    // Cuando se quiera volver a añadir un libro a la sesión --> SEREALIZAR el objeto otra vez
    $biblioteca = unserialize($_SESSION['biblioteca']);

  
    // al añadir libro
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['year']) && isset($_POST['url']))  {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];
            $url = $_POST['url'];
            
            // se crea el objeto libro
            $llibre = new Llibre($title, $author, $year, $url);

            // añadir el objeto libro a la biblioteca usando el objeto biblioteca
            $biblioteca->afegirLLibre($llibre);

            // guardar biblioteca a la sesion
            $_SESSION['biblioteca'] = serialize($biblioteca);
        }

    }
    // al buscar libro 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['search']))  {
            $title = $_GET['search'];
            
            

            echo $biblioteca->cercarLlibre($title);
            
            // Mostrar resultados encontrados o un mensaje de no se ha encontrado
            
        }

    }


    function verPagina () {
        global $biblioteca;
        $pagina = isset($_GET['page']) ? $_GET['page'] : 'list';

        switch($pagina) {
            case 'addBook':
                return "
                <form action='' class='max-w-sm mx-auto' method='POST'>
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
                <form action='' class='max-w-sm mx-auto my-10' method='GET'>
                    <div class='mb-5'>
                        <label for='search'>Buscar Por Título</label>
                        <input type='search' id='search' name='search' class='block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900' required> 
                    </div>
                    <button type='submit' class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>Buscar Libro</button>
                </form>";
            case 'listBooks':
                $libros = $biblioteca->mostrarLlibres();
                return "
                    <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3'>
                        $libros  
                    </div>
                ";
        }
        
    }
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
                <a class="bg-blue-400 text-white font-bold py-2 px-4 rounded-full" href="?page=addBook">Añadir Libro</a>
            </li>
            <li class="mr-6">
                <a class="bg-blue-400 text-white font-bold py-2 px-4 rounded-full" href="?page=listBooks">Ver Libros</a>
            </li>
            <li class="mr-6">
                <a class="bg-blue-400 text-white font-bold py-2 px-4 rounded-full" href="?page=searchBook">Buscar Libro</a>
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