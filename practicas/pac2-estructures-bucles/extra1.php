<?php
    function generarRandom(){
        $nRandom = rand(1, 100);
        return $nRandom;
    }
    function esPrimo($n){
        //Si el nombre te divisors a més de l'1 i el mateix, no es primer
        for ($i=2; $i < $n; $i++) { 
            if ($n % $i == 0) {
                return False;
            }
        }
        return True;
    }

    function mostrarResultado(){
        $nRandom = generarRandom();

        echo "<h3 class='p-2'>Nombre generat: $nRandom</h3>";
        echo "<h4>Divisors de $nRandom: </h4><br>";

        echo "<div class='d-flex justify-content-center divisores'>";
        for ($i=1; $i <= $nRandom; $i++) { 
            if ($nRandom % $i == 0) {
                echo "<div class = 'bg-dark text-light p-3 rounded'>$i</div>";
            }
        }
        echo "</div><br>";

        if (esPrimo($nRandom) && $nRandom != 1) {
            echo "<p>El nombre $nRandom <span class='text-danger'>Si</span> és primer.</p>";
        }else{
            echo "<p>El nombre $nRandom <span class='text-danger'>No</span> és primer.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body{
            min-height: 100vh;
            gap: 1rem;
            justify-content: center;
        }
        .container{
            max-width: 60rem;
            text-align: center;
            gap: 1rem;
        }
        .divisores{
            gap: 1rem;
        }
        p{
            font-size: 1.3rem;
        }
    </style>
</head>
<body style="font-family: 'Poppins', sans-serif;" class="d-flex justify-content-center align-items-center">
    <div class="container d-flex flex-column justify-content-center">
        <?php
            mostrarResultado();
        ?>
    </div>
</body>
</html>