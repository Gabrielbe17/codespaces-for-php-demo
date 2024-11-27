<?php
    session_start();

    include "actions.php";

    //mostrar residuo actual y la cola restante
    $_SESSION['basura'] = [
        ["url" => "./images/glass.jpg", "name" => "Glass"],
        ["url" => "./images/organic.jpg", "name" => "Organic"],
        ["url" => "./images/paper.jpg", "name" => "Paper"],
        ["url" => "./images/plastic.jpg", "name" => "Plastic"]
    ];
    
    //empezar con contador = 0, si jugador acierta, incrementar
    
    if (!isset($_SESSION['basuraPosiciones']) || empty($_SESSION['basuraPosiciones'])) {
        $_SESSION['basuraPosiciones'] = [];
        crearColaBasura();
        $_SESSION['count'] = 0;
    }

    //ARRAY DE 28 POSICIONES
    
    function crearColaBasura(){
        for ($i=0; $i < 28; $i++) { 
            $posRandom = rand(0, count($_SESSION['basura']) -1);
            array_push($_SESSION['basuraPosiciones'], $posRandom);
        }
    }
    

    // print("<pre>".print_r($_SESSION['basuraPosiciones'],true)."</pre>");


    function mostrarColaBasura() {
        global $pos, $pos1, $pos2, $pos3;
        return "
        <div class='d-flex align-items-center justify-content-center mb-4'>
            <div class='text-center p-3 mx-2 border border-success rounded' style='background-color: #d4edda;'>
                <h4 class='text-success'>Ahora: {$_SESSION['basura'][$pos]['name']}</h4>
                <img src={$_SESSION['basura'][$pos]['url']} alt='' class='img-fluid' style='width: 80px;''>
            </div>
            <div class='d-flex gap-2'>
                <div class='text-center p-3 mx-2 border rounded' style='background-color: #f8f9fa;'>
                    <h6>{$_SESSION['basura'][$pos1]['name']}</h6>
                    <img src={$_SESSION['basura'][$pos1]['url']} alt='' class='img-fluid' style='width: 50px;'>
                </div>
            </div>
            <div class='d-flex gap-2'>
                <div class='text-center p-3 mx-2 border rounded' style='background-color: #f8f9fa;'>
                    <h6>{$_SESSION['basura'][$pos2]['name']}</h6>
                    <img src={$_SESSION['basura'][$pos2]['url']} alt='' class='img-fluid' style='width: 50px;'>
                </div>
            </div>
            <div class='d-flex gap-2'>
                <div class='text-center p-3 mx-2 border rounded' style='background-color: #f8f9fa;'>
                    <h6>{$_SESSION['basura'][$pos3]['name']}</h6>
                    <img src={$_SESSION['basura'][$pos3]['url']} alt='' class='img-fluid' style='width: 50px;'>
                </div>
            </div>
        </div>
        ";

    }    

   

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Basura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include './components/navbar.php'?>
    <div class="container mt-4">
        <h1 class="text-center">Gestión del reciclaje</h1>


        <!-- Mensaje de contenedores llenos -->
       
        <!-- Contador de basura procesada -->
       
        <button type="button" class="btn p-3 btn-secondary text-white">
            Basura procesada: <span class="badge bg-danger"> <?= $basuraProcesada?></span>
        </button>
        <hr>

      <!-- Visualización de la cola de basura -->
        <div class="mt-4">
            <h3>¿Qué toca reciclar ahora?</h3>
            <div class="d-flex align-items-center justify-content-center mb-4">
                <?=
                    mostrarColaBasura();
                ?>
            </div>
        </div>

        <!-- Botones de contenedores -->
        <div class="d-flex justify-content-center flex-wrap gap-3">
            <a href="index.php?accion=Glass" class="btn btn-success">
                Glass
            </a>
            <a href="index.php?accion=Organic" class="btn btn-secondary">
                Organic
            </a>
            <a href="index.php?accion=Paper" class="btn btn-primary">
                Paper
            </a>
            <a href="index.php?accion=Plastic" class="btn btn-warning">
                Plastic
            </a>
            <a href="index.php?accion=vaciarCamion" class="btn btn-danger">
                <img src="images/camion.png" alt="Vaciar Camión" class="img-fluid" style="width: 50px;"> Vaciar Camión
            </a>
        </div>


        <!-- Estado de los contenedores -->
        <h2 class="mt-5">Estado de los Contenedores</h2>
        <table class="table table-striped p-5">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Paper</td>
                    <td><span><?= $contadorPaper?></span> / 7</td>
                </tr>
                <tr>
                    <td>Glass</td>
                    <td><span><?= $contadorGlass?></span>/ 7</td>
                </tr>
                <tr>
                    <td>Organic</td>
                    <td><span><?= $contadorOrganic?></span> / 7</td>
                </tr>
                <tr>
                    <td>Plastic</td>
                    <td><span><?= $contadorPlastic?></span> / 7</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include 'components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




