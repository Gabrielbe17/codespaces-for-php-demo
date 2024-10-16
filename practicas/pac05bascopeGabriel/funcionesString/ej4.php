<?php
    function reemplazarPalabras($texto, $buscar, $reemplazar){
        return str_replace($buscar, $reemplazar, $texto);
    }

    echo reemplazarPalabras("tiro dos", "dos", "tres");
?>