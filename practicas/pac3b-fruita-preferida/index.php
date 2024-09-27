<?php
    // Array frutas
    $fruites = [
        ["nom" => "Manzana", "imatge" => "https://static.vecteezy.com/system/resources/previews/023/858/853/non_2x/ai-genrative-green-apple-free-png.png", "seleccionada" => false],
        ["nom" => "Plátano", "imatge" => "images/banana.jpg","seleccionada" => false],
        ["nom" => "Naranja", "imatge" => "images/orange.jpg", "seleccionada" => false],
        ["nom" => "Fresa", "imatge" => "images/strawberry.jpg", "seleccionada" => false],
        ["nom" => "Kiwi", "imatge" => "images/kiwi.jpg", "seleccionada" => false]
    ];

    //Función que cambia el estado seleccionada a true
    function cambiarEstadoSeleccionada(){
        global $fruites;
        if (isset($_GET['fruta'])) {
            $nom = $_GET['fruta'];

            foreach ($fruites as &$fruta) {
                if ($fruta['nom'] == $nom) {
                    $fruta['seleccionada'] = true;
                    break;
                }
            }
        }
    }

    //Función que muestra la card en el html de la fruta seleccionada
    function mostrarCardFrutaSeleccionada(){
        global $fruites;
        if (isset($_GET['fruta'])) {
            $nom = $_GET['fruta'];

            foreach ($fruites as $fruta) {
                if ($fruta['nom'] == $nom) {
                    //Mostramos la card
                    echo "<div class='card mt-4 w-25 shadow-lg'>";
                        echo "<img src='{$fruta['imatge']}' class='card-img-top img-fluid' alt='{$fruta['nom']}'>";
                        echo "<div class='card-body bg-warning'>";
                            echo "<h5 class='card-title'>{$fruta['nom']}</h5>";
                            echo "<p class='card-text'>¡Esta es tu fruta favorita!</p>";
                        echo "</div>";
                    echo "</div>";
                    break;
                }
            }
        }
    }
    // Función que muestra las frutas en filas, en el html, con su correspondiente estilo
    function mostrarFruites(){
        global $fruites;

        foreach ($fruites as $fruta) {
            if ($fruta['seleccionada'] == true) {
                echo "<tr class='table-success'>";
                    echo "<td>{$fruta['nom']}</td>";
                    echo "<td>✔️ Seleccionada</td>";
                    echo "<td><a class='btn btn-primary' href='?fruta={$fruta['nom']}'>Seleccionar</a></td>";
                echo "</tr>";
            }else{
                echo "<tr class='table-danger'>";
                    echo "<td>{$fruta['nom']}</td>";
                    echo "<td>✖ No seleccionada</td>";
                    echo "<td><a class='btn btn-primary' href='?fruta={$fruta['nom']}'>Seleccionar</a></td>";
                echo "</tr>";
            }
       }
    }

    // Extra: 
    function(){

    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

    </style>
</head>
<body style="<?php ?>">
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
                <?php
                    cambiarEstadoSeleccionada();
                    mostrarFruites();
                ?>
            </tbody>
        </table>

        <?php
            mostrarCardFrutaSeleccionada();
        ?>
    </div>
    <div class="position-absolute" style="top: 2rem; right: 3rem;">
        <?php
            function mostrarParametros($color){
                if (isset($_GET['fruta'])) {
                    return "?fruta={$_GET['fruta']}&color={$color}";
                }else{
                    return "";
                }
            }
        ?>
        <button class="btn btn-danger"><a href=<?php mostrarParametros("rojo")?>>asdf</a></button>
        <button class="btn btn-primary"><a href=<?php mostrarParametros("azul")?>>asdf</a></button>
        <button class="btn btn-info"><a href=<?php mostrarParametros("azulClaro")?>>fas</a></button>
        <button class="btn btn-dark"><a href=<?php mostrarParametros("negro")?>>asdf</a></button>
        <button class="btn btn-warning"><a href=<?php mostrarParametros("amarillo")?>>sdf</a></button>
        <button class="btn btn-success"><a href=<?php mostrarParametros("verde")?>>sdf</a></button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
