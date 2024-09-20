<?php
    // echo "hello world";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .contenedor{
            border: 1px solid lightgrey;
            border-radius: .5rem;
            padding: 2rem;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center p-2">PRÀCTICA 2 - 19/09/24</h1><br>
        <div class="d-flex justify-content-around">        
            <div>
                <h3>Excercici 1</h3>
                <a href="ej1.php" target="_blank">Veure excercici 1</a>
                <h3>Excercici 2</h3>
                <a href="ej2.php" target="_blank">Veure excercici 2</a>
                <h3>Excercici 3</h3>
                <a href="ej3.php" target="_blank">Veure excercici 3</a>
            </div>
            
            <div class="">
                <h3>Extra 1</h3>
                <a href="extra1.php" target="_blank">Veure extra 1</a>
                <h3>Extra 2</h3>
                <a href="extra2.php" target="_blank">Veure extra 2</a>
            </div>
        </div>
    </div>
</body>
</html>