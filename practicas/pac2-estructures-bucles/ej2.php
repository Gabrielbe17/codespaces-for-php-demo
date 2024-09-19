<?php
    function mostrarTaulesMult(){
        for ($i=1; $i <= 11; $i++) { 
            echo "<div class='border bg-dark text-white'>";
            echo "<h3 class='bg-light text-dark'>Taula del $i</h3>";
            for ($j=1; $j <= 10; $j++) { 
                $multRes = $i * $j;
                echo "<div>$i x $j = $multRes</div>";
            }
            echo "</div>";
            echo "<br><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercici 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Excercici 2 - Taules de multiplicar</h1>
    <?php
        mostrarTaulesMult();
    ?>
</body>
</html>