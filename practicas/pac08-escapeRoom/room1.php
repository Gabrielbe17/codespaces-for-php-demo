<?php
    session_start();
    
    include 'array.php';

    echo $_SESSION['nivel'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Habitación 1</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Habitación 1</h2>
        <!-- <p class="card-text"><?php echo elegirPreguntaAleatoria($_SESSION['nivel'])['pregunta']?></p> -->
        <form method="">
            <div class="mb-3">
                <input type="text" name="answer" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
        <?= $message; ?> <!-- Muestra el mensaje de éxito o error -->

        <!-- <div class="alert alert-success mt-3">¡Felicidades! ¡Has completado el juego!</div>

        <div class='alert alert-danger mt-3'>Respuesta incorrecta. ¡Inténtalo de nuevo!</div> -->

    </div>
</body>
</html>

<!-- Pagina de ejemplo para una room -->