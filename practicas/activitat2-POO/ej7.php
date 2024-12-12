<?php
    class Persona {
        public string $nom;
        public int $edat;
        
        public function __construct($nom, $edat) {
            $this->nom = $nom;
            $this->edat = $edat;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $nom = $_GET['nom'];
        $edat = $_GET['edat'];

        $persona = new Persona($nom, $edat);

        echo "<h3>Dades:</h3>";
        echo "<p>Nom: " . $persona->nom . "</p>";
        echo "<p>Edat: " . $persona->edat . " anys</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulari</title>
    </head>
    <body>
        
        <form method="get" action="">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>
            
            <label for="edat">Edat:</label>
            <input type="number" id="edat" name="edat" required><br><br>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>