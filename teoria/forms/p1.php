<h1>Hola soy un H1</h1>
<?php
// GET

// $nombre = $_GET['name'];
// $edad = $_GET['age'];

// POST, a diferencia del metodo GET, se envian los datos pero sin mostrarse por la URL 

$nombre = $_POST['name'];
$edad = $_POST['age'];

// echo $nombre;
// echo $edad;

echo "Hola ". $nombre . " tienes " . $edad . "años";

?>