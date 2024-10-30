<?php


        
    // función que retorne el numero ganador de la apuesta, y determine si es negro o rojo, menos el 0 (que es verde) 
    function generarNumeroGanador(){
        $num = rand(0, 36);
        return $num;
    }

    // $numGanador = generarNumeroGanador(); //se ha de determinar si este numero generado es rojo o negro, excepto si es 0 (verde)
    $numGanador = generarNumeroGanador();
    echo "El número ganador es: ". $numGanador. "<br><br>";

    $tipoApuesta = $_GET['tipoApuesta'];
    $valorApuesta = $_GET['valorApuesta'];
    $cantidadApuesta = $_GET['cantidad']; 

    echo "A qué has apostado?: " . $valorApuesta . "<br>";
    echo "Cantidad Depositada: ".$cantidadApuesta . "<br>";

    //procesar las apuestas
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
           
            break;
        case 'Docena':
          
            break;
        case 'Columna':
          
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