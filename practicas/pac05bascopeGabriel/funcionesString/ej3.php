<?php
    function obtenerSubcadena($texto, $inicio, $longitud){
        return substr($texto, $inicio, $longitud);
    }
    echo obtenerSubcadena("hola como va", 0, 6);
?>