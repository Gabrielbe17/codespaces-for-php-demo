<?php
    session_start();

    include 'functions.php';

    // Verifica si el usuario ha iniciado sesión; si no, redirige a login.php.
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit();
    }


    $name = $_SESSION['username'];
    
    $url = (isset($_SESSION['photo']) && !empty($_SESSION['photo'])) ? $_SESSION['photo'] : "./assets/user.png";

    // Verifica el rol del usuario

    // Obtener la lista de libros desde la sesión
 

    function mostrarLibros(){
        $listadoLibros = '';
        foreach ($_SESSION['libros'] as $libro) {
            $listadoLibros .=  "
                <div class='col'>
                    <div class='card h-100 shadow-sm'>
                        <img src={$libro['image']} class='card-img-top' alt='' style='height: 400px; object-fit: cover;'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$libro['title']}</h5>
                            <p class='card-text'><strong>Autor:</strong> {$libro['author']}</p>
                            <p class='card-text'>{$libro['description']}</p>
                        </div>
                    ";

                    if ($_SESSION['role'] === 'admin'){
                        $listadoLibros .= "
                        <div class='card-footer d-flex justify-content-between'>
                            <a href='add_edit_book.php?id={$libro['id']}' class='btn btn-outline-primary btn-sm'>
                                <i class='fas fa-edit'></i> Editar
                            </a>
                            <a href='delete_book.php?id={$libro['id']}' class='btn btn-outline-danger btn-sm'>
                                <i class='fas fa-trash-alt'></i> Eliminar
                            </a>
                        </div>";
                    }

                $listadoLibros .= "
                    </div>
                </div>
            ";
        }
        return $listadoLibros;
    }

    var_dump($_SESSION['libros'])
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Encabezado del usuario -->
    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src=<?= $url ?> alt="Foto de perfil" class="rounded-circle me-3 img-fluid" style="width: 6rem; height: 6rem; object-fit: cover;">
                <div>
                    <h4 class="m-0">👋 Bienvenido, <?= $name?></h4>
                    <?= mostrarRol()?>
                </div>
            </div>
            <a href="logout.php" class="btn btn-warning btn-sm">
               Cerrar sesión ❌
            </a>
        </div>
    </header>

    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Biblioteca Virtual</h1>
            <p class="lead">Disfruta explorando nuestra colección de libros</p>
        </div>

        <!-- Botón de agregar libro (solo visible para el admin) -->
      
            <div class="text-center mb-4">
                <?php if ($_SESSION['role'] === 'admin'):  ?>
                    <a href="add_edit_book.php" class="btn btn-outline-success btn-lg">
                        <i class="fas fa-plus-circle me-2"></i>Agregar Nuevo Libro
                    </a>
                <?php endif; ?>
            </div>
        

        <!-- Mostrar lista de libros en un grid de tarjetas con tamaño uniforme -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?= mostrarLibros() ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>