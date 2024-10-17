<?php

    function dividirArray($array, $tamanio){
        return array_chunk($array, $tamanio);
    }

    print_r(dividirArray([1, 2, 3, 4, 5, 6, 7, 8], 2));
?>