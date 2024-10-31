<?php
    session_start();

    //crear una array en la sesion
    $_SESSION['items'] = ['vaso', 'cuaderno', 'lapiz'];

    print_r($_SESSION['items']);

    echo "<br>";

    function addItem($item){
        array_push($_SESSION['items'], $item);
    }

    addItem('bola');

    echo "<br>";

    print_r($_SESSION['items']);
?>