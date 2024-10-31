<?php
    //NULL
    $num = 23;

    if (is_null($num)) {
        echo "El número es null";
    }else{
        echo "El número es: $num";
    }


    unset($num); //hacer null una variable



    //si existe -> isset (tiene en cuenta los valores null)
    if (isset($num)){
        echo "El número es: $num";
    }


    //no existe -> empty
    if (empty($num)){
        echo "El número es null o no existe";
    }

?>