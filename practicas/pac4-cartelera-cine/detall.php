<!-- Pagina para ver toda la información detallada de la pelicula seleccionada -->

<?php
include "pelicules.php";


//Función que busca el url de la imagen de la pelicula seleccionada
function mostrarImagen($pelicules){
    foreach ($pelicules as $pelicula) {
        if ($pelicula['nom'] == $_GET['nom']) {
            echo "{$pelicula['img']}";
        }
    }
}
function mostrarEstrellasValoracion($nota){
    //convertir string pasado a float
    $nota = (float) $nota;

    //redondear al entero mas proximo esta nota
    $numEstrellas = round(($nota * 5) / 10);
    $estrellas = '';
    for ($i=0; $i < $numEstrellas; $i++) { 
        $estrellas .= "<i class='fa-solid fa-star'></i>"; 
    }
    return $estrellas;

}
function mostrarImagenesCarrousel($pelicules){
    foreach ($pelicules as $pelicula) {
        if ($pelicula['nom'] == $_GET['nom']) {
            $imagenesCarrousel = $pelicula['imgCarrousel'];

            for ($i=0; $i < count($imagenesCarrousel); $i++) { 
                if ($i == 0) {
                    echo "<div class='carousel-item active'>";
                }else{
                    echo "<div class='carousel-item'>";
                }
                echo "<img class='d-block w-100 mx-auto' src='{$imagenesCarrousel[$i]}' alt='First slide'>";
                echo "</div>";
            }
        }
    }    
}

// FUNCION QUE MUESTRA LA INFORMACION DETALLADA DE LA PELICULA SELECCIONADA
function mostrarInformacioPelicula($pelicules){
    foreach ($pelicules as $pelicula) {

        if ($pelicula['nom'] == $_GET['nom']) {
            $qualCorr = null;
            $horarios = $pelicula['hor'];

            //Concatenar 'años' si la calificacion es numerica.
            if (is_numeric($pelicula['qual'])) {
                $qualCorr = " años";
            }

            echo "<p class='card-text sinopsi'>{$pelicula['sinop']}</p><br><br>";
            echo "<h5>Durada: </h5><span class=''>{$pelicula['dur']}'</span><br><br>";
            echo "<h5>Director: </h5><span class=''>{$pelicula['director']}</span><br><br>";
            //implode, mostrar elementos del array con un separador    
            echo "<h5>Actors: </h5><span class=''>". implode(", ", $pelicula['repart']) ."</span><br><br>";
            echo "<h5>Qualificació: </h5><span class''>{$pelicula['qual']}". $qualCorr ."</span><br><br>";
            echo "<h5>Gènere: </h5><span class=''>{$pelicula['gen']}</span><br><br>";
            // VALORACION EN ESTRELLAS 1-5
            echo "<div class='estrellas-box d-flex align-items-center'><h5 style='padding-top: .25rem;' class='mr-2'>Valoració: </h5>" ."". mostrarEstrellasValoracion($pelicula['valoracion']) . " " . "<i class='fa-brands fa-imdb ml-2'></i>" . "</div><br>";
            echo "<div class='detall-horaris border d-flex align-items-center justify-content-between border border-dark' style='background-color: #efefef;'>";
                echo "<div class='d-flex p-2 justify-content-between align-items-center w-50'>";
                    echo "<h6>Horaris:</h6>";
                    echo "<div class='btn-group d-flex' style='gap: 1rem;'>";
                        for ($i=0; $i < count($horarios); $i++) { 
                            echo "<button type='button' class='btn btn-sm text-light' style='background-color: var(--rojo);'>{$horarios[$i]}</button>";
                        }
                    echo "</div>";
                echo "</div>";    
            echo "</div>";
        }
    }

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle <?php mostrarNombre(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        :root{
            --rojo: rgb(227, 29, 26);
            --textoRoj: rgb(255, 0, 0);
        }
        body{
            font-family: "Montserrat", sans-serif;
        }
        h5{
            display: inline;
        }
        a{
            text-decoration: none;
            display: inline-block;
        }
        i.fa-imdb{
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="card mb-3 mx-auto" style="max-width: 90rem;">
        <h1 class="card-title"><?php mostrarNombre(); ?></h1>
        <hr>
        <div class="row no-gutters">
            <div class="col-md-4 d-flex flex-column" style="gap: 1rem;">
                <img src=<?php mostrarImagen($pelicules); ?> class="card-img" alt="...">
                <a href="trailer.php?nom=<?php mostrarNombre(); ?>" target="_blank" class="text-dark border border-dark text-center w-100 p-1"><i class="fa fa-play-circle"></i> TRAILER</a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <?php mostrarInformacioPelicula($pelicules); ?>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                            mostrarImagenesCarrousel($pelicules);
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>