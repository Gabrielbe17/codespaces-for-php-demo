<?php
    include 'ej4.php';

    $person1 = new Persona2("Gabriel", 19);
    $person2 = new Persona2("John", 20);


    echo $person1->mostrarMensaje(). "<br>";
    echo $person2->mostrarMensaje(). "<br>";
?>