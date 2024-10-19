<?php
    function estaLogueado($logueado){
        echo ($logueado) ? "<img src='logged.png'>" : "<img src='notLogged.png'>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <?php estaLogueado(true)?>
</body>
</html>