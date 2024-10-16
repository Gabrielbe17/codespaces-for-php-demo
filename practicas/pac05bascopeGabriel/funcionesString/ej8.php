<?php
    function contarOcurrencias($texto, $palabra){
        return substr_count($texto, $palabra);
    }
    echo contarOcurrencias("dia dia dia dia", "dia");
?>