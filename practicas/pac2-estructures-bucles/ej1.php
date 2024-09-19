<?php
    function parells(){
        for ($i=50; $i <= 500; $i++) { 
            if ($i % 2 == 0) {
                echo "<div class='bg-dark text-light col'>$i</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercici 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="max-width: 70rem; margin: 0 auto;">
        <h1>Excercici 1 - Nombres parells entre 50 i 500</h1>
        <div class="row">
            <?php
                parells();
            ?>
        </div>
    </div>
</body>
</html>