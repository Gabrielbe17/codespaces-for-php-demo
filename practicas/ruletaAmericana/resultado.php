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

    //FUNCTION QUE procesa las apuestas, determina si la apuesta es ganadora o no.
    function procesarApuesta($tipoApuesta){
        global $numGanador;
        global $valorApuesta;

        switch ($tipoApuesta) {
            case 'Rojo/Negro':
                //verificar si el numero generado es rojo o negro, excluyendo el 0
                $colorNumGenerado = comprobarColorNumero($numGanador);
                return  ($colorNumGenerado == $valorApuesta) ? "Has ganado la apuesta!": "Has perdido!";
                break;  
            case 'Par/Impar':
                // se verifica si el numero generado es par y el usuario ha introducido par, o impar y el usuario ha introducido impar
                return (($numGanador % 2 == 0 && strcmp($valorApuesta, "Par") == 0) || ($numGanador % 2 != 0 && strcmp($valorApuesta, "Impar") == 0)) ? "Has ganado la apuesta!": "Has perdido!";

                break;
            case 'Pasa/Falta':
                //si el usuario indica falta y el numero generado es meno o igual a 18, gana la apuesta. Si indica que Pasa, si el numero ganador es mayor que 18, gana la apuesta.
                if (strcmp($valorApuesta, "Falta") == 0 && $numGanador > 0) {
                    return ($numGanador > 0 && $numGanador <= 18) ? "Has ganado la apuesta!": "Has perdido!";
                }else{
                    return ($numGanador > 18) ? "Has ganado la apuesta!": "Has perdido!";
                }
                break;
            case 'Pleno':
                echo ($numGanador == $valorApuesta) ? "Has ganado la apuesta!": "Has perdido!";
                break;
            case 'Docena':
                if (strcmp($valorApuesta, "1a docena") == 0) {
                    return ($numGanador > 0 && $numGanador <= 12) ? "Has ganado la apuesta!": "Has perdido!";
                }else if (strcmp($valorApuesta, "2a docena") == 0) {
                    return  ($numGanador > 12 && $numGanador <= 24) ? "Has ganado la apuesta!": "Has perdido!";
                }else{
                    return ($numGanador > 24) ? "Has ganado la apuesta!": "Has perdido!";
                }
                break;
            case 'Columna':
                if (strcmp($valorApuesta, "1a columna") == 0) {
                    // del 1 al 34, con step de 3
                    for ($i=1; $i <= 34; $i+=3) { 
                        if ($numGanador == $i) {
                            return "Has ganado la apuesta!";
                        }
                    }
                    return "Has perdido!";
                }else if (strcmp($valorApuesta, "2a columna") == 0) {
                    //del 2 al 35, con step de 3
                    for ($i=2; $i <= 35; $i+=3) { 
                        if ($numGanador == $i) {
                            return "Has ganado la apuesta!";
                            break;
                        }
                    }
                    return "Has perdido!";
                }else{
                    //del 3 al 36, con step de 3
                    for ($i=3; $i <= 36; $i+=3) { 
                        if ($numGanador == $i) {
                            return "Has ganado la apuesta!";
                            break;
                        }
                    }
                    return "Has perdido!";
                }
                break;
            case 'Dos docenas':
                //se puede apostar a dos docenas, es decir, la 1 y la 2 o la 2 y la 3.
                if (strcmp($valorApuesta, "1a y 2a dozena") == 0) {
                    return ($numGanador > 0 && $numGanador <= 24) ? "Has ganado la apuesta!" : "Has perdido!";
                }else{
                    return ($numGanador > 12 && $numGanador <= 36) ? "Has ganado la apuesta!" : "Has perdido!";
                }
                break;
            case 'Dos columnas':
                $primeraCol = range(1, 34, 3);
                $segundaCol = range(2, 35, 3);
                $terceraCol = range(3, 36, 3);

                if (strcmp($valorApuesta, "1a y 2a columna") == 0) {
                    //del 1 al 34, con step de 3 , y del 2 al 35 con step de 3
                    echo (in_array($numGanador, $primeraCol) || in_array($numGanador, $segundaCol)) ? "Has ganado la apuesta!" : "Has perdido!";
                }else{
                    // del 2 al 34, con step de 3 , y del 3 al 36 con step de
                    echo (in_array($numGanador, $segundaCol) || in_array($numGanador, $terceraCol)) ? "Has ganado la apuesta!" : "Has perdido!";
                }
                break;
            case 'Seisena':
                /*
                    1a seisena: 123, 456
                    ...

                    La seisena 1: empieza con el numero  1
                    la seisena 2: empieza con el numero 4
                    la seisena 3: empieza con el numero 7
                    ...

                */ 

                //obtener valor numerico seisena
                $string = str_split($valorApuesta); //convertir valor apuesta a array
                $pos = implode('', array_filter($string, 'ctype_digit')); //filtrar array string para que devuelva un array filtrado que muestre solo los digitos, y despues hacerle un implode para convertirlo a string
                
                $arrEmpieza = range(1,31, 3); //array que contiene las posiciones iniciales de cada seisena
                $empieza = $arrEmpieza[$pos-1];

                $seisenaSeleccionada = range($empieza , $empieza + 5);
                // print_r($seisenaSeleccionada);

                echo (in_array($numGanador, $seisenaSeleccionada)) ? "Has ganado la apuesta!" : "Has perdido!";
                
                break;
            case 'Cuadro':
                //Hay 12 cuadrados

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

    // TODO: FUNCION que calcule las GANANCIAS SEGUN EL TIPO DE APUESTA Y LA CANTIDAD APOSTADA
    function calcularGanancias($tipApuesta){
        global $cantidadApuesta;

        $apuesta1x1 = ['Rojo/Negro', 'Par/Impar', 'Pasa/Falta'];
        $apuesta2x1 = ['Docena', 'Columna'];
        $apuesta05x1 = ['Dos Docenas', 'Columnas'];

        if (procesarApuesta($tipApuesta) == "Has ganado la apuesta!") {
            if (in_array($tipApuesta, $apuesta1x1)) {
                return 'Has recuperado la apuesta: ' . $cantidadApuesta . '€!';
            }else if (in_array($tipApuesta, $apuesta2x1)) {
                $ganancia = $cantidadApuesta * 2;
                return 'Has ganado el doble: ' . $ganancia . '€!';
            }else if (in_array($tipApuesta, $apuesta05x1)) {
                $ganancia = $cantidadApuesta * 0.5;
                return 'Has ganado la mitad: ' . $ganancia . '€!';
            }else if ($tipApuesta == 'Seisena') {
                $ganancia = $cantidadApuesta * 5;
                return 'Has ganado la mitad: ' . $ganancia . '€!';
            }else if ($tipApuesta == 'Cuadro') {
                return '';
            }else if ($tipApuesta == 'Transversal') {
                return '';
            }else if ($tipApuesta == 'Caballo') {
                return '';
            }else {
                $ganancia = $cantidadApuesta * 35;
                return 'Has ganado: ' . $ganancia . '€!';
            }
        }
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
        img#ruleta{
            animation: rotar 2s linear;
        }
        @keyframes rotar {
            0%{
                transform: rotate(30deg);
            }
            50%{
                transform: rotate(20deg);
            }
            100%{
                transform: rotate(0deg);
            }
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="container text-center d-flex flex-column">
        <h1>Resultado Apuesta</h1>
        <div class="row">
            <div class="col">
                <img src="assets/ruleta.png" alt="" style="width: 18rem;" id="ruleta">
            </div>
            <div class="col">
                <img src="assets/apuestas-ruleta.jpg" alt="" style="width: 30rem;">
            </div>
        </div>
        <div class="row">
            <p>El jugador ha elegido el tipo de apuesta: <?php echo $tipoApuesta?></p>
            <p>El jugador ha apostado a: <?php echo $valorApuesta?></p>
            <p>El jugador ha apostado: <?= $cantidadApuesta . '€!'?></p>
            <p>El numero ganador es... <?php echo $numGanador;?> !!</p>
            <h3> <?php echo procesarApuesta($tipoApuesta)?></h3>
            <h4><?= calcularGanancias($tipoApuesta)?></h4>
        </div>
    </div>
</body>
</html>
