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
        <input type="text" name="name" value="<?php echo (isset($_GET['name']) ? $_GET['name'] : 'Ingrese su nombre.')?>">
        <button>Enviar</button>
    </form>
</body>
</html>