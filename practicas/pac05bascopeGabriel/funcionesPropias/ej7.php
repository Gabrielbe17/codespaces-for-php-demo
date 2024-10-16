<?php
    function generarEnlaceDescarga($archivo){
        return "<a href='{$archivo}'>Descargar</a>";
    }
    echo generarEnlaceDescarga("../../pac4-cartelera-cine/images/alice.jpg");
?>