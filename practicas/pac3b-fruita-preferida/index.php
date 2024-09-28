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

    //Función que muestra los parametros correctos cuando le damos a un color
    function mostrarParametros($color){
        if (isset($_GET['fruta'])) {
            echo "?fruta={$_GET['fruta']}&color={$color}";
        }else{
            return "";
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
    function cambiarBgColor(){
        if (isset($_GET['color'])) {
            $bgColor = $_GET['color'];
            switch ($bgColor) {
                case 'rojo':
                    echo "background-color: red";
                    break;
                
                case 'azul':
                    echo "background-color: blue";
                    break;
                
                case 'azulClaro':
                    echo "background-color: lightblue";
                    break;
                
                case 'negro':
                    echo "background-color: black";
                    break;
                
                case 'amarillo':
                    echo "background-color: yellow";
                    break;
                
                case 'verde':
                    echo "background-color: green";
                    break;
                default:
                    break;
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .button { 
            color: white;
            padding: 5px 15px;
            margin-right: .5rem;
            cursor: pointer;
        }
    </style>
</head>
<body style="<?php cambiarBgColor();?>">
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
        <a href=<?php mostrarParametros("rojo")?> class="btnColor button bg-danger"></a>
        <a href=<?php mostrarParametros("azul")?> class="btnColor button bg-primary"></a>
        <a href=<?php mostrarParametros("azulClaro")?> class="btnColor button bg-info"></a>
        <a href=<?php mostrarParametros("negro")?> class="btnColor button bg-dark"></a>
        <a href=<?php mostrarParametros("amarillo")?> class="btnColor button bg-warning"></a>
        <a href=<?php mostrarParametros("verde")?> class="btnColor button bg-success"></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
