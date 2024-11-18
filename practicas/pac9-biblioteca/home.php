<?php
    session_start();

    // Verifica si el usuario ha iniciado sesión; si no, redirige a login.php.
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit();
    }

    $_SESSION['libros'] = [
        ["id" => 1, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1348322381i/3450744.jpg", "title" => "Nudge", "author" => "Richard H. Thaler", "description" => "Every day we make choices—about what to buy or eat, about financial investments or our children’s health and education, even about the causes we champion or the planet itself. Unfortunately, we often choose poorly. Nudge is about how we make these choices and how we can make better ones. Using dozens of eye-opening examples and drawing on decades of behavioral science research, Nobel Prize winner Richard H. Thaler and Harvard Law School professor Cass R. Sunstein show that no choice is ever presented to us in a neutral way, and that we are all susceptible to biases that can lead us to make bad decisions. But by knowing how people think, we can use sensible “choice architecture” to nudge people toward the best decisions for ourselves, our families, and our society, without restricting our freedom of choice."],
        ["id" => 2, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1657781256i/61439040.jpg", "title" => "1984", "author" => "George Orwell", "description" => "A masterpiece of rebellion and imprisonment where war is peace freedom is slavery and Big Brother is watching. Thought Police, Big Brother, Orwellian - these words have entered our vocabulary because of George Orwell's classic dystopian novel 1984. The story of one man's Nightmare Odyssey as he pursues a forbidden love affair through a world ruled by warring states and a power structure that controls not only information but also individual thought and memory 1984 is a prophetic haunting tale More relevant than ever before 1984 exposes the worst crimes imaginable the destruction of truth freedom and individuality. With a foreword by Thomas Pynchon. This beautiful paperback edition features deckled edges and french flaps a perfect gift for any occasion"],
        ["id" => 3, "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1609035271i/41804.jpg", "title" => "I, Robot", "author" => "Isaac Asimov", "description" => "I, Robot, a collection of nine short stories by science-fiction writer Isaac Asimov that imagines the development of “positronic” (humanlike, with a form of artificial intelligence) robots and wrestles with the moral implications of the technology. The stories originally appeared in science-fiction magazines between 1940 and 1950, the year that they were first published together in book form. Asimov’s treatment of robots as being programmed with ethics rather than as marauding metal monsters was greatly influential in the development of science fiction."],
        ["id" => 4, "image" => "", "title" => "ad", "author" => "as", "description" => "s"],
        ["id" => 5, "image" => "", "title" => "ae", "author" => "as", "description" => "s"]
    ];


    $name = $_SESSION['username'];
    
    $url = (isset($_SESSION['photo']) && !empty($_SESSION['photo'])) ? $_SESSION['photo'] : "./assets/user.png";

    // Verifica el rol del usuario

    // Obtener la lista de libros desde la sesión
    function mostrarRol(){
        return ($_SESSION['role'] == 'admin' ? "<p class='text-muted m-0'><i class='fas fa-user-shield text-success'></i> Admin ✏️</p>" : " <p class='text-muted m-0'>Lector 📚</p>");
    }

    function mostrarLibros($libros){
        $listadoLibros = '';
        foreach ($libros as $libro) {
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
                            <a href='add_edit_book.php' class='btn btn-outline-danger btn-sm'>
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
            <a href="" class="btn btn-warning btn-sm">
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
            <?= mostrarLibros($_SESSION['libros']) ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>