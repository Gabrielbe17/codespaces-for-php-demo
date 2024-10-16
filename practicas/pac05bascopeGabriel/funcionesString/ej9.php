<?php
    function dividirPalabras($texto){
        return explode(" ", $texto);
    }
    print_r(dividirPalabras("dos dos dos"));
?>