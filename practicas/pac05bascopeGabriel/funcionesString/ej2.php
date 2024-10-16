<?php

    function contarPalabras($texto){
        return str_word_count($texto);
    }
    echo contarPalabras("hola hola hola");
?>