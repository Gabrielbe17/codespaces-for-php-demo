<?php


        
    // función que retorne el numero ganador de la apuesta, y determine si es negro o rojo, menos el 0 (que es verde) 
    function generarNumeroGanador(){
        $num = rand(0, 36);
        return $num;
    }

    $numGanador = generarNumeroGanador(); //se ha de determinar si este numero generado es rojo o negro, excepto si es 0 (verde)
    echo "El número ganador es: ". $numGanador. "<br>";

    $tipoApuesta = $_GET['tipoApuesta'];
    $valorApuesta = $_GET['valorApuesta'];
    $cantidadApuesta = $_GET['cantidad']; 


    echo $cantidadApuesta;

    //procesar las apuestas
    switch ($tipoApuesta) {
        case 'Rojo/Negro':
            //verificar si el numero generado es rojo o negro, excluyendo el 0
            comprobarColorNumero($numGanador);
            break;  
        case 'Par/Impar':
           
            break;
        case 'Pasa/Falta':
          
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

        if ($num <= 10 || $num >= 19) {
            $color = ($num % 2 == 0) ? "Negro" : "Rojo";
        }else{
            $color = ($num % 2 == 0) ? "Rojo" : "Negro";
        }
        return $color;
    }

?>