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




    function verPagina () {
        global $biblioteca;
        $pagina = isset($_GET['page']) ? $_GET['page'] : '';

        // al buscar libro, usar método GET
        $resultados = null;
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET['search']))  {

                $title = $_GET['search'];

                // Mostrar resultados encontrados o un mensaje de no se ha encontrado
                $resultados = $biblioteca->cercarLlibre($title); 
                $resultadosContainer = "<div class='mx-auto container p-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3'>
                    $resultados 
                </div>";
            }

        }
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
                    <button type='submit' class='text-white bg-black font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center'>Añadir Libro</button>
                </form>";
            case 'searchBook':
                return "
                <form action='' class='max-w-sm mx-auto my-10' method='GET'>
                    <div class='mb-5'>
                        <label for='search'>Buscar Por Título</label>
                        <input type='search' id='search' name='search' class='block w-full p-2.5 rounded-lg focus:ring-blue-500 bg-gray-50 border border-gray-300 text-gray-900' required> 
                    </div>
                    <button type='submit' class='text-white bg-black font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center'>Buscar Libro</button>
                </form>";
            case 'listBooks':
                $libros = $biblioteca->mostrarLlibres();
                return "
                    <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3'>
                        $libros  
                    </div>
                ";
            default: 
                
                return empty($resultados) ?  "<div class='max-w-[45rem] mx-auto flex flex-col gap-10 text-center h-[40rem]'>
                    <div class='leading-10'>
                        <h1 class='text-4xl font-semibold'>Bienvenido a tu Biblioteca Virtual</h1>
                        <p class='text-slate-600 text-lg'>Busca, añade y lista tus experiencias a través de los libros.</p>
                    </div>
                    <ul class='flex items-center justify-center gap-5'>
                        <li class=''>
                            <a class='p-3 bg-black text-white text-lg font-medium rounded-md hover:opacity-80 transition-opacity' href='?page=listBooks'>
                            <i class='fa-solid fa-book'></i> <span class='ml-1'>Ver Libros</span></a>
                        </li>
                        <li class=''>
                            <a class='p-3 bg-white text-black text-lg font-medium rounded-md border border-black hover:bg-gray-100 transition-colors' href='?page=addBook'>
                                <i class='fa-solid fa-circle-plus'></i> <span class='ml-1'>Añadir Libro</span>
                            </a>
                        </li>
                        <li class=''>
                            <a class='p-3 bg-gray-200 text-gray-800 text-lg font-medium rounded-md hover:bg-gray-300 transition-colors' href='?page=searchBook'>
                                <i class='fa-solid fa-magnifying-glass'></i> <span>Buscar Libro</span></a>
                        </li>
                    </ul>
                </div>" : $resultadosContainer;
            
        }
        
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="p-5 bg-black mb-5 flex items-center justify-between">
        <h1 class="text-4xl text-center text-white">
            <a href="/">Biblioteca</a>    
        </h1>
        
        <ul class='flex items-center justify-center gap-5'>
            <li class=''>
                <a class='p-3 text-slate-300' href='?page=listBooks'>
                Ver Libros</a>
            </li>
            <li class=''>
                <a class='p-3 text-slate-300' href='?page=addBook'>
                    Añadir Libro
                </a>
            </li>
            <li class=''>
                <a class='p-3 text-slate-300' href='?page=searchBook'>
                    Buscar Libro
                </a>
            </li>
        </ul>
    </div>
    <div class="container mx-auto">
        <div class="py-5 mt-[7rem]">
            <?php
                echo verPagina();
            ?> 
        </div>
    </div>    
</body>
</html>