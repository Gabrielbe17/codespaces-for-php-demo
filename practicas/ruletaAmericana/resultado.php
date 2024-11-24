<?php

    //variables
    $tipoApuesta = $_POST['tipoApuesta'];
    $valorApuesta = $_POST['valorApuesta'];
    $cantidadApuesta = $_POST['cantidad']; 
        
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
                return ($numGanador == $valorApuesta) ? "Has ganado la apuesta!": "Has perdido!";
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
                    return (in_array($numGanador, $primeraCol) || in_array($numGanador, $segundaCol)) ? "Has ganado la apuesta!" : "Has perdido!";
                }else{
                    // del 2 al 34, con step de 3 , y del 3 al 36 con step de
                    return (in_array($numGanador, $segundaCol) || in_array($numGanador, $terceraCol)) ? "Has ganado la apuesta!" : "Has perdido!";
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
                
                $arrayPosiciones = range(1,31, 3); //array que contiene las posiciones iniciales de cada seisena
                $empieza = $arrayPosiciones[$pos-1];

                $seisenaSeleccionada = range($empieza , $empieza + 5);
                // print_r($seisenaSeleccionada);

                return (in_array($numGanador, $seisenaSeleccionada)) ? "Has ganado la apuesta!" : "Has perdido!";
                
                break;
            case 'Cuadro':
                //Hay 22 cuadrados

                // los cuadrados empiezan por 1, 2, 4, 5, 7, 8, 10, 11 ... skipea los multiplos de 3

                //convertir valorApuesta a numero
                $string = str_split($valorApuesta); 
                $pos = implode('', array_filter($string, 'ctype_digit')); 

                // reindexar el array filtrado, para corregir posiciones
                $arrayFiltrado = array_values(array_filter(range(1, 32), function($n){
                    return $n % 3 != 0;
                }));

                //acceder a la posicion del array filtrado dependiendo, con $pos, y comprobar si esta el rango 
                $numInicial = $arrayFiltrado[$pos-1];
                $rangoValores = [$numInicial, $numInicial+1, $numInicial+3, $numInicial+4];

                return in_array($numGanador, $rangoValores) ? "Has ganado la apuesta!" : "Has perdido";
                
                break;
            case 'Transversal':
                /*
                    fila 1 --> 1, 3
                    fila 2 --> 4, 6
                    fila 3 --> 7, 9
                    fila 4 --> 10, 12
                    ...
                    fila 13 --> 34, 36
                */
                $string = str_split($valorApuesta); 
                $pos = implode('', array_filter($string, 'ctype_digit')); 
                
                $arrayNumInicial = range(1, 34, 3);
                $arrayFila = $arrayNumInicial[$pos-1];

                return in_array($numGanador, range($arrayFila, $arrayFila +2)) ? "Has ganado la apuesta!" : "Has perdido!";

                break;  
            case 'Caballo':
                // convertir valor apuesta a un numero y, dependiendo de si es vertical o horizontal, sumar 1 o 3 a ese numero y ver si el numero ganador esta en ese rango
                $posiblesNumeros = explode('/', $valorApuesta);

                return in_array($numGanador, $posiblesNumeros) ? "Has ganado la apuesta!" : "Has perdido!";

                break;
            default:
                break;
        }
    }
    function comprobarColorNumero($num){
        $color = '';

        if ($num != 0) {
            if (($num > 0 && $num <= 10) || ($num >= 19 && $num <= 28)){
                $color = ($num % 2 == 0) ? "Negro" : "Rojo";
            }else{
                $color = ($num % 2 == 0) ? "Rojo" : "Negro";
            }
        }
        return $color;
    }

    // TODO: FUNCION que calcule las GANANCIAS SEGUN EL TIPO DE APUESTA Y LA CANTIDAD APOSTADA
    function calcularGanancias($tipApuesta){
        global $cantidadApuesta;

        $apuesta1x1 = ['Rojo/Negro', 'Par/Impar', 'Pasa/Falta'];
        $apuesta2x1 = ['Docena', 'Columna'];
        $apuesta05x1 = ['Dos docenas', 'Dos columnas'];

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
                $ganancia = $cantidadApuesta * 8;
                return 'Has ganado: ' . $ganancia . '€!';
            }else if ($tipApuesta == 'Transversal') {
                $ganancia = $cantidadApuesta * 11;
                return 'Has ganado: '. $ganancia . '€!';
            }else if ($tipApuesta == 'Caballo') {
                $ganancia = $cantidadApuesta * 17;
                return 'Has ganado: '. $ganancia . '€!';
            }else {
                $ganancia = $cantidadApuesta * 35;
                return 'Has ganado: ' . $ganancia . '€!';
            }
        }
    }
    $esRojo = comprobarColorNumero($numGanador) === "Rojo" ? "text-danger" : "";
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
        <div class="row mt-5">
            <p>El jugador ha elegido el tipo de apuesta: <?= $tipoApuesta?></p>
            <p>El jugador ha apostado a: <?= $valorApuesta?></p>
            <p>El jugador ha apostado: <?= $cantidadApuesta . '€!'?></p>
            <p>El numero ganador es... <span class="display-6 <?= $esRojo ?>"><?= $numGanador; ?></span>!</p>

            <h3> <?php echo procesarApuesta($tipoApuesta)?></h3>
            <h4><?= calcularGanancias($tipoApuesta)?></h4>
            <form action="index.php" method="POST">
                <input type="hidden" name="tipoApuesta" value="<?= $tipoApuesta; ?>">
                <input type="hidden" name="valorApuesta" value="<?= $valorApuesta; ?>">
                <input type="hidden" name="cantidad" value="<?= $cantidadApuesta; ?>">
                <button type="submit" class="btn btn-success mt-3 w-auto mx-auto px-4">Volver a apostar</button>
            </form>
        </div>
    </div>
</body>
</html>
