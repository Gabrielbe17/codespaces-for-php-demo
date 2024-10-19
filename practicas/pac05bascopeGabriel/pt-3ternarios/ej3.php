<?php

    $nombre = $_GET['name'];
    function mostrarNombreForm(){
        global $nombre;
        return (empty($nombre)) ? "value='Introduce tu nombre.'" : "value='{$nombre}'";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>CONTACTO</h1>
    <form action="#" method="GET">
        <input type="text" name="name" <?php mostrarNombreForm(); ?>>
        <button>Enviar</button>
    </form>
</body>
</html>