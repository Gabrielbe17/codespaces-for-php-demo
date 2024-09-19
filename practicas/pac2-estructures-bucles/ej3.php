<?php
    function numAleatori(){
        $numRandom = rand(0, 100);
        if ($numRandom % 2 == 0) {
            echo "<div class = 'bg-primary p-3'>$numRandom</div>";
        }else{
            echo "<div class = 'bg-warning p-3'>$numRandom</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercici 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Excercici 3 - Nombre aleatori parell o senar</h1>
    <h3>Nombre parell - Blau</h3>
    <h3>Nombre senar - Groc</h3><br>
    <?php
        numAleatori();
    ?>
</body>
</html>