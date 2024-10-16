<?php
    function compararString($cadena1, $cadena2){
        $result = strcmp($cadena1, $cadena2);
        return ($result  == 0) ? "true" : "false";
    }

    echo compararString("dos", "dos");
?>