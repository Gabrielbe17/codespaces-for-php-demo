<?php

    //variables
    $tipoApuesta = $_GET['tipoApuesta'];
    $valorApuesta = $_GET['valorApuesta'];
    $cantidadApuesta = $_GET['cantidad']; 
        
    // función que retorne el numero ganador de la apuesta, y determine si es negro o rojo, menos el 0 (que es verde) 
    function generarNumeroGanador(){
        $num = rand(0, 36);
        return $num;
    }

    $numGanador = generarNumeroGanador();

    //procesar las apuestas
    function procesarApuesta($tipoApuesta){
        global $numGanador;
        global $valorApuesta;

        switch ($tipoApuesta) {
            case 'Rojo/Negro':
                //verificar si el numero generado es rojo o negro, excluyendo el 0
                $colorNumGenerado = comprobarColorNumero($numGanador);
                echo ($colorNumGenerado == $valorApuesta) ? "Has ganado la apuesta!": "Has perdido!";
                break;  
            case 'Par/Impar':
                // se verifica si el numero generado es par y el usuario ha introducido par, o impar y el usuario ha introducido impar
                echo (($numGanador % 2 == 0 && strcmp($valorApuesta, "Par") == 0) || ($numGanador % 2 != 0 && strcmp($valorApuesta, "Impar") == 0)) ? "Has ganado la apuesta!": "Has perdido!";

                break;
            case 'Pasa/Falta':
                //si el usuario indica falta y el numero generado es meno o igual a 18, gana la apuesta. Si indica que Pasa, si el numero ganador es mayor que 18, gana la apuesta.
                if (strcmp($valorApuesta, "Falta") == 0 && $numGanador > 0) {
                    echo ($numGanador > 0 && $numGanador <= 18) ? "Has ganado la apuesta!": "Has perdido!";
                }else{
                    echo ($numGanador > 18) ? "Has ganado la apuesta!": "Has perdido!";
                }
                break;
            case 'Pleno':
                echo ($numGanador == $valorApuesta) ? "Has ganado la apuesta!": "Has perdido!";
                break;
            case 'Docena':
                //corregir
                if (strcmp($valorApuesta, "1a docena") == 0) {
                    echo ($numGanador > 0 && $numGanador <= 12) ? "Has ganado la apuesta!": "Has perdido!";
                }else if (strcmp($valorApuesta, "2a docena") == 0) {
                    echo ($numGanador > 12 && $numGanador <= 24) ? "Has ganado la apuesta!": "Has perdido!";
                }else{
                    echo ($numGanador > 24) ? "Has ganado la apuesta!": "Has perdido!";
                }
                break;
            case 'Columna':
                //TODO: corregir esta apuesta

                if (strcmp($valorApuesta, "1a columna") == 0) {
                    // del 1 al 34, con step de 3
                    for ($i=1; $i <= 34; $i+=3) { 
                        if ($numGanador == $i) {
                            echo "Has ganado la apuesta!";
                            break;
                        }
                    }
                    echo "Has perdido!";
                }else if (strcmp($valorApuesta, "2a columna") == 0) {
                    //del 2 al 35, con step de 3
                    for ($i=2; $i <= 35; $i+=3) { 
                        if ($numGanador == $i) {
                            echo "Has ganado la apuesta!";
                            break;
                        }
                    }
                    echo "Has perdido!";
                }else{
                    //del 3 al 36, con step de 3
                    for ($i=3; $i <= 36; $i+=3) { 
                        if ($numGanador == $i) {
                            echo "Has ganado la apuesta!";
                            break;
                        }
                    }
                    echo "Has perdido!";
                }
                break;
            case 'Dos docenas':
            
                break;
            case 'Dos columnas':
            
                break;
            case 'Seisena':
            
                break;
            case 'Cuadro':
            
                break;
            case 'Transversal':
            
                break;
            case 'Caballo':
            
                break;
            default:
                break;
        }
    }
    function comprobarColorNumero($num){
        $color = '';

        if (($num > 0 && $num <= 10) || ($num >= 19 && $num <= 29)){
            $color = ($num % 2 == 0) ? "Negro" : "Rojo";
        }else{
            $color = ($num % 2 == 0) ? "Rojo" : "Negro";
        }
        return $color;
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Apuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            height: 100vh;
        }
        .container{
            gap: 1rem;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container text-center d-flex flex-column">
        <h1>Resultado Apuesta</h1>
        <div class="row">
            <div class="col">
                <img src="assets/ruleta.png" alt="" style="width: 18rem;">
            </div>
            <div class="col">
                <img src="assets/apuestas-ruleta.jpg" alt="" style="width: 30rem;">
            </div>
        </div>
        <div class="row">
            <p>El jugador ha elegido el tipo de apuesta: <?php echo $tipoApuesta?></p>
            <p>El jugador ha apostado a: <?php echo $valorApuesta?></p>
            <p>El numero ganador es... <?php echo $numGanador;?> !!</p>
            <h3> <?php procesarApuesta($tipoApuesta)?></h3>
        </div>
    </div>
</body>
</html>
