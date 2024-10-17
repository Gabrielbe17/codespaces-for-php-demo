<?php

    function mostrarNombreForm(){
        if ($_GET['name'] == "") {
            return "Introduce tu nombre.";
        }else{
            return $_GET['name'];
        }
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
    <form action="#" method="GET">
        <input type="text" name="name" id="" placeholder="Escribe tu nombre..." value=<?php mostrarNombreForm(); ?>>
        <button>Enviar</button>
    </form>
</body>
</html>