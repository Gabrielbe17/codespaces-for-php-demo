<?php
    function eliminarDuplicados($array){
        return array_unique($array);
    }
    print_r(eliminarDuplicados([2, 2, 2, 4, 2, 1])); // Devuelve: [2, 4, 1]
?>