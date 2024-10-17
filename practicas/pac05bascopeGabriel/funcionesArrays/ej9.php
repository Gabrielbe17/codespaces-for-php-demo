<?php

    function combinarArrays($array1, $array2){
        return array_merge($array1, $array2);
    }
    print_r(combinarArrays([1, 2, 3], [4, 5, 6])); // Devuelve: [1, 2, 3, 4, 5, 6]
?>