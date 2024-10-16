<?php

function calcularEdad($anioNacimiento){
        $year = date("Y");
        return $year - $anioNacimiento;
    }
    echo calcularEdad(2005);
?>