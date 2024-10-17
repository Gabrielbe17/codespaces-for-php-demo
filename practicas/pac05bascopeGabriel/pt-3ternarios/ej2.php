<?php
    function mostrarDisponibilidad($productos){
        $stock = count($productos);
        return $stock > 0 ? "<p style='color: green;'>Producto Disponible</p>" : "<p style='color: red;'>Producto agotado</p>";
    }
?>