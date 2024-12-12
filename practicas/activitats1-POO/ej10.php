<?php

    // Crea una classe Animal amb atributs nom , tipus i un mètode descriure() . Fes que accepti els valors per un formulari.

    class Animal {
        public string $nom;
        public string $tipus;

        public function __construct($nom, $tipus) {
            $this->nom = $nom;
            $this->tipus = $tipus;
        }

        public function Descriure() {
            return "El animal és un ". $this->tipus. " i el seu nom és ". $this->nom;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nom"]) && isset($_GET["tipus"])) {
       
        $nom = $_GET['nom'];
        $tipus = $_GET['tipus'];


        $animal1 = new Animal($nom, $tipus);

        echo "<h3>Dades:</h3>";
        echo "<p>Nom: " . $animal1->nom . "</p>";
        echo "<p>Tipus: " . $animal1->tipus . " </p>";

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej10</title>
</head>
<body>
    <form method="get" action="">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="tipus">Tipus:</label>
        <input type="text" id="tipus" name="tipus" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>