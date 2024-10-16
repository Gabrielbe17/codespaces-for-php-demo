<?php
    function calcularDescuento($precioOriginal, $descuento){
        return $precioOriginal - ($precioOriginal * ($descuento/100));
    }
    echo calcularDescuento(150, 10);
?>