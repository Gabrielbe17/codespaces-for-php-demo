<?php
    function autenticar($autenticado){
        return $autenticado ? "<h2>Bienvenido!</h2>" : "Por favor, inicie sesión.";
    }

    echo autenticar(false);
?>