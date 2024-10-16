<?php

function generarSaludo($nombre){
    return "<h1>Hola, {$nombre}!</h1>";
}
echo generarSaludo("Gabriel");
?> 