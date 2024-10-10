<?php
    function generarResumen($texto, $limite){

        for ($i=0; $i < $limite; $i++) { 
            echo "{$texto[$i]}";
        }
        echo "...";
    }
    generarResumen("barnaclesCuarentaMil", 4);
?>