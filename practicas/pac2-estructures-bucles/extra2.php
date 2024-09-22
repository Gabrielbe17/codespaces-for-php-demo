<?php
    $sumTemp = 0;
    function generarTemperatures(){
        global $sumTemp;
        
        for ($i=0; $i < 10; $i++) { 
            $temp = rand(-10, 40);

            if ($temp < 10) {
                echo "<div class='bg-primary text-light p-3 col-md-3 text-center'><span class='display-5'>$temp °C</span><p>Fred</p></div>";
            }else if ($temp >= 10 && $temp <= 25) {
                echo "<div class='bg-warning p-3 col-md-3 text-center'><span class='display-5'>$temp °C</span><p>Temperatura Suau</p></div>";
            }else{
                echo "<div class='bg-danger text-light p-3 col-md-3 text-center'><span class='display-5'>$temp °C</span><p>Calor</p></div>";
            }
            $sumTemp += $temp;
        } 
    }
    function mostrarMitjana(){
        global $sumTemp;
        $avg = $sumTemp / 10;
        echo "<br><br><p class='text-center display-6'>La mitjana de temperatures es: $avg °C</p>";
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .contenedor{
            max-width: 70rem;
            margin: 0 auto;
        }
        .temperatures{
            font-weight: bold;
            gap: 1rem;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center p-3">Classificació de temperatures</h1>
        <div class="temperatures d-flex row justify-content-center">
            <?php
                generarTemperatures();
            ?>
        </div>
        <?php
            mostrarMitjana();
        ?>
    </div>
</body> 
</html>