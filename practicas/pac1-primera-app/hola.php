<?php
    function mostrarFecha() {
        $fecha = date("Y-m-d");
        echo "<p class='text-center'>$fecha</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Primera Pràctica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <header class="row justify-content-around navbar bg-dark">
        <div class="col-4">
            <?php
                echo "<img src='images/logo-fpllefia.png'>";
            ?>
        </div>
        <div class="col-4">
            <h2 class="text-white">Módulo 7 - Práctica 1. Mi primera aplicación en PHP</h2>
        </div>
    </header>
    <div class="d-flex justify-content-center align-items-center mx-auto mt-5" style="max-width: 40rem;">
        <div class="mr-4">
            <?php
                echo "<img src='images/foto.png' class='rounded-circle'>";
            ?>
            <h2>Gabriel Bascope</h2>
        </div>
        <div class="">
            1. Es tracta de l'etiqueta que obre un bloc de codi php i es tanca amb '?>'
            2. Es defineix la funció sayHello dins aquest bloc. Rep un paràmetre i retorna un "Hello " + el paràmetre passat.
            3. S'executa la funció sayHello que té com a paràmetre 'remote world'
            4. Es crida a la funció phpinfo, que mostra informació sobre la configuració de PHP.
        </div>
    </div>
    <footer class="bg-dark text-white fixed-bottom">
        <h3 class="text-center">Gabriel Bascope</h3>
        <?php
            mostrarFecha();
        ?>
    </footer>
</body>
</html>