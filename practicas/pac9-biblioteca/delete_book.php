<?php
    session_start();

    include 'functions.php';

    if ($_SESSION['role'] != 'admin') {
        header('Location: home.php');
        exit();
    }


    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        eliminarLibro($id);
        header('Location: home.php');
        exit();
    }

?>