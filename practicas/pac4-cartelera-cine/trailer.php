<!-- Pagina para ver el trailer de la pelicula selleccionada -->


<?php
include "pelicules.php";

function mostrarVideoTrailer($pelicules){
    foreach ($pelicules as $pelicula) {
        if ($pelicula['nom'] == $_GET['nom']) {
            echo $pelicula['urlTrailer'] . "?autoplay=1";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trailer <?php mostrarNombre(); ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/favicon.png" type="image/png">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <style>
        body{
            font-family: "Montserrat", sans-serif;
            min-height: 100vh; 
            gap: 3rem;
        }
    </style>
</head>

<body class="d-flex flex-column justify-content-center align-items-center">
    <h1 class="">Trailer <?php mostrarNombre(); ?></h1>
    <iframe width="80%" height="500px" src="<?php mostrarVideoTrailer($pelicules);?>" allow="autoplay" allowfullscreen></iframe>
    <a class="btn btn-dark" href="index.php" role="button">Tornar</a>
</body>
</html>