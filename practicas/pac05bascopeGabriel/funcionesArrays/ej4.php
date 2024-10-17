<?php
    function buscarEnArray($array, $valor){
        return (in_array($valor, $array) ? "true" : "false");
    }
    echo buscarEnArray([1, 2, 3, 4, 5], 3); // Devuelve: true
?>