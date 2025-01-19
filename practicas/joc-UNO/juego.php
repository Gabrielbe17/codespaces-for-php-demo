<?php
    session_start();

    include "classes/carta.class.php";
    include "classes/baraja.class.php";

    if (!(isset($_SESSION['nplayers'])) || !(isset($_SESSION['ncards']))) {
        header('Location: index.php');
        exit();
    }
    
    $baraja = new Baraja();
    $baraja->crea_baraja();
    $baraja->mezcla();

    $cartas_total = $baraja->conjunto_cartas;

    // echo '<pre>' , var_dump($cartas_total) , '</pre>';


    $carta = new Carta("blue", 2, 1);
    

    function mostrarJugadores() {
        global $carta;
        $playersContainer = '';
        for ($i=1; $i <= $_SESSION['nplayers']; $i++) { 
            $playersContainer .= "
                <div class='d-flex flex-column gap-3'>
                    <h3 class='text-decoration-underline'>Jugador {$i}</h3>
                    <div class='d-flex flex-column gap-2 justify-items-center mx-auto'>
                ";
                for ($j=1; $j <= $_SESSION['ncards']; $j++) { 
                    $playersContainer .= $carta->pinta_carta();
                }
            $playersContainer .= "
                    </div>
                </div>
            ";
        }
        return $playersContainer;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNO Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">

       <h1 class="text-center">Juego</h1>

       <div class="d-flex gap-5 mt-5">
            <?= mostrarJugadores()?>
       </div>

    </div>
</body>
</html>