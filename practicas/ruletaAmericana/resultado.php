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


?>