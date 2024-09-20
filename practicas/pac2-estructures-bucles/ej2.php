<?php
    function mostrarTaulesMult(){
        for ($i=1; $i <= 11; $i++) { 
            echo "<div class='border bg-dark text-white col-md-3'>";
            echo "<h3 class='text-light text-center'>Taula del $i</h3>";
            for ($j=1; $j <= 10; $j++) { 
                $multRes = $i * $j;
                echo "<div class = 'text-center p-1 border'>$i x $j = $multRes</div>";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <div class="container">
        <h1 class="text-center p-3">Excercici 2 - Taules de multiplicar</h1>
        <div class="row d-flex justify-content-center" style="gap:1rem;">
            <?php
                mostrarTaulesMult();
            ?>
        </div>
    </div>
</body>
</html>