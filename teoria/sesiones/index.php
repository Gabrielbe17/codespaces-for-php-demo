<?php
    session_name("Sesion-prueba");
    session_start();
    
    //guardamos una variable en el servidor
    $_SESSION['username'] = "gabriel";
    $_SESSION['age'] = 19;
    
    echo $_SESSION['username'];
    echo $_SESSION['age'];

    //terminar sesion
    session_destroy();
?>