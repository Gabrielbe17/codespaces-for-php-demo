<?php
    function filtrarMayores($numeros, $valor){
        //se usa use para acceder a la variable valor en el array_filter 

        return array_filter($numeros, function($n) use($valor){
            return $n > $valor;
        });
    }

    print_r(filtrarMayores([1, 4, 7, 2, 9], 4));
?>