<?php
    session_start();
    include 'array.php';

 
    if (!isset($_SESSION['current_room']) || $_SESSION['current_room'] != 4) {
        header('Location: room3.php');
        exit();        
    }

    $numPregunta = $_SESSION['current_room'] -1;

    $mensaje = '';
    $correcta = 0;
    $volver = '';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['respuesta'] = $_POST['answer'];

        if (strtolower($_SESSION['respuesta']) === strtolower($adivinanzas[$_SESSION['nivel']][$numPregunta]['resposta']))  {
            $mensaje =  "<div class='alert alert-success mt-3'>¡Felicidades! ¡Has completado el juego!</div>";
            $_SESSION['current_room'] = 0;
            $correcta = 1;
            session_destroy();
        }else{       
            $mensaje = "<div class='alert alert-danger mt-3'>Respuesta incorrecta. ¡Inténtalo de nuevo!</div>";
        }
    }

    if ($correcta) {
        $volver = "<a class='btn btn-info text-light' href='index.php' role='button'>Volver a jugar</a>";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Habitación 4</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <?php include './components/header.php';?>
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Habitación 4</h2>
        <p class="card-text"><?= $adivinanzas[$_SESSION['nivel']][$numPregunta]['pregunta']?></p>
        <form action="#" method="POST">
            <div class="mb-3">
                <input type="text" name="answer" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
        <?= $mensaje; ?> 
        <?= $volver;?>
    </div>
</body>
</html>