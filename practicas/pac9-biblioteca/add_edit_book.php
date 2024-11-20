<?php
    session_start();
    
    include 'functions.php';

    if ($_SESSION['role'] != 'admin') {
        header('Location: home.php');
        exit();  
    }

    $editando = false;

    if (isset($_GET['id'])) {
        $editando = true;
        $_SESSION['id'] = $_GET['id'];
        $posLibro = $_GET['id'] - 1;
    }
    function cargarDatosLibroInputs(){
        global $posLibro;
        $libro = $_SESSION['libros'][$posLibro];
        $id = isset($_GET['id']);
        // var_dump($id);
            
        return "
            <div class='form-floating mb-3'>
                <input type='text' class='form-control' id='titulo' name='titulo' value='" . ($id ? $libro['title'] : '') . "' placeholder='Título' required>
                <label for='titulo'>Título</label>
            </div>
            <div class='form-floating mb-3'>
                <input type='text' class='form-control' id='autor' name='autor' value='" . ($id ? $libro['author'] : '') . "' placeholder='Autor' required>
                <label for='autor'>Autor</label>
            </div>
            <div class='form-floating mb-3'>
                <input type='text' class='form-control' id='imagen' name='imagen' value='" . ($id ? $libro['image'] : '') . "' placeholder='URL de la Imagen'>
                <label for='imagen'>URL de la Imagen</label>
            </div>
            <div class='form-floating mb-4'>
                <textarea class='form-control' id='descripcion' name='descripcion' placeholder='Descripción' style='height: 150px;'>" . ($id ? $libro['image'] : '') . "</textarea>
                <label for='descripcion'>Descripción</label>
            </div>
            <div class='d-grid'>
                <button type='submit' class='btn btn-primary btn-lg'>Añadir libro</button>
            </div>";

            
    }
    
    
    
    // if (isset($_SESSION['id']) && isset($title) && isset($author) || (isset($image) || isset($description))) {
        //     editarLibro($_SESSION['id'], $title, $author, $image, $description);
        // }else{
            //     agregarLibro(count($_SESSION['libros']) + 1, $title, $author, $image, $description);
            // }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $title = $_POST['titulo'];
        $author = $_POST['autor'];
        $image = $_POST['imagen'];
        $description = $_POST['descripcion'];    
        
        // var_dump($_SESSION['id']);
        if ($editando) {
            echo "holaaaa";
            editarLibro($_SESSION['id'], $title, $author, $image, $description);
        }else{
            agregarLibro(count($_SESSION['libros']) + 1, $title, $author, $image, $description);
        }
    }


    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Encabezado del formulario -->
    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <h4 class="m-0">👋 Bienvenido, NOMBRE DE USUARIO</h4>
                <p class="text-muted m-0"><i class="fas fa-user-shield text-success"></i> ROL ADMIN O ROL LECTOR???</p>
            </div>
            <a href="home.php" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Volver a la Biblioteca
            </a>
        </div>
    </header>

    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold"></h2>
            <p class="lead"></p>
        </div>

        <!-- Formulario para agregar o editar libro. DEPENDIENDO DE SI SE AÑADE O SE EDITA CAMBIARÁN COSA DEL FORMULARIO, USA TERNARIOS SON MUY ÚTILES-->
        <form method="POST" class="mx-auto" style="max-width: 600px;">
            <?= cargarDatosLibroInputs(); ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>