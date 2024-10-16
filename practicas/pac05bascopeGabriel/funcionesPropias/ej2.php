<?php
function calcularTotal($precio, $cantidad, $impuesto){
    return ($precio*$cantidad + (($impuesto/100)*$precio)); 
}

echo calcularTotal(120, 2, 10);
?>