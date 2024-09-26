<?php
    // Array frutas
    $fruites = [
        ["nom" => "Manzana", "imatge" => "https://static.vecteezy.com/system/resources/previews/023/858/853/non_2x/ai-genrative-green-apple-free-png.png", "seleccionada" => false],
        ["nom" => "Plátano", "imatge" => "images/banana.jpg","seleccionada" => false],
        ["nom" => "Naranja", "imatge" => "images/orange.jpg", "seleccionada" => false],
        ["nom" => "Fresa", "imatge" => "images/strawberry.jpg", "seleccionada" => false],
        ["nom" => "Kiwi", "imatge" => "images/kiwi.jpg", "seleccionada" => false]
    ];

    function mostrarCardFrutaSeleccionada($fruites){
        if (isset($_GET['fruta'])) {
            $nom = $_GET['fruta'];

            foreach ($fruites as $fruta) {
                if ($fruta['nom'] == $nom) {
                    $fruta['seleccionada'] = true;
                    
                    //Mostramos la card
                    echo "<div class='card mt-4 w-25 shadow-lg'>";
                        echo "<img src='{$fruta['imatge']}' class='card-img-top img-fluid' alt='{$fruta['nom']}'>";
                        echo "<div class='card-body bg-warning'>";
                            echo "<h5 class='card-title'>{$fruta['nom']}</h5>";
                            echo "<p class='card-text'>¡Esta es tu fruta favorita!</p>";
                        echo "</div>";
                    echo "</div>";
                }
            }
        }
        
    }
    function mostrarFruites($fruites){
       // función que recorra el array y genere el html para cada fila de la tabla
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selecciona tu fruta favorita</h1>

        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-danger">
                    <td>Manzana</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="?fruta=Manzana">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Plátano</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="?fruta=Plátano">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Naranja</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="?fruta=Naranja">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Fresa</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="?fruta=Fresa">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Kiwi</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="?fruta=Kiwi">Seleccionar</a></td>
                </tr>
            </tbody>
        </table>

        <?php
            mostrarCardFrutaSeleccionada($fruites);
        ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- aqui tienes el emoji de SELECCIONADA ✔️ para copiarlo y usarlo en la práctica -->