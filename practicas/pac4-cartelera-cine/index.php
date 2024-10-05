<!-- Mostrar un layout de 10 peliculas en forma de cards -->

<?php
// Array de las peliculas
include "pelicules.php";


function mostrarPeliculas($pelicules){
    foreach ($pelicules as $pelicula) {
      $imgUrl = $pelicula["img"];
      $horario = $pelicula["hor"];

      echo "<div class='col'>";
      echo "<div class='card shadow-sm'>";
        echo "<h4 class='text-center card-header'>{$pelicula['nom']}</h4>";
        echo "<img src='$imgUrl' class='img-responsive card-img-top'>";
        echo "<div class='card-body'>";
            echo "<div class='d-flex justify-content-center align-items-center flex-column'>";
                echo "<div class='btn-group'>";
                    // Mostrar, en Botones, los horarios disponibles de cada pelicula 
                   for ($i=0; $i < count($horario); $i++) { 
                     echo "<button type='button' class='btn btn-sm text-light' style='background-color: var(--rojo);'>{$horario[$i]}</button>";
                   }
                echo "</div>";
                //Otro button group para los botones: Ver trailer y ver mes información (detalle pelicula)
                echo "<div class='btn-group d-flex'>";
                  echo "<a href='trailer.php?nom={$pelicula['nom']}' class='trailer-btn' target='_blank'><i class='fa-solid fa-play'></i></a>";
                  echo "<a href='detall.php?nom={$pelicula['nom']}' class='info-btn' target='_blank'><i class='fa-solid fa-book'></i></i></a>";
                echo "</div>";
        echo "</div>";
        echo "</div>";
      echo "</div>";
      echo "</div>";
    } 
  }

?> 

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Cartellera Ocine</title>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    :root{
      --rojo: rgb(227, 29, 26);
      --textoRoj: rgb(255, 0, 0);
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .btn-group{
      gap: 1rem;
    }
    /* Estilos botones trailer e info */
    .trailer-btn, .info-btn{
      background-color: #000000;
      font-size: .75rem;
      color: var(--textoRoj);
      font-size: 1rem;
      padding: .5rem;
    }
    .card-body > div{
      gap: 1rem;
    }
    
  </style>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-light shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
           <img src="images/cineLogo.png" alt="" srcset="">
        </a>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="font-weight-light">Cartellera</h1>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-auto" style="max-width: 55rem;">
            <?php
                mostrarPeliculas($pelicules);
            ?>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>

</body>

</html>