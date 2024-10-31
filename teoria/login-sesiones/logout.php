<?php
    session_start();
    session_unset(); //eliminar variable de sesión
    session_destroy();
    header('location: login.php'); //redireccionamiento a la página de login
?>