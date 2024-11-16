<?php
    $imagen = (isset($_SESSION['image'])) ? "<img src=" . $_SESSION['image'] . " style='width: 5rem;'" . ">" : "<img src='./assets/user.png'> ";
?>
<!-- un header amb el nom de l'usuari, el nivell de dificultat i la seva foto de perfil. -->
<header class="position-absolute top-0 start-0 w-100 bg-dark text-light p-2">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="">
            <h4><?= $_SESSION['nom']?></h4>
            <p>Nivel: <span><?= $_SESSION['nivel']?></span></p>
        </div>
        <?=
            $imagen;
        ?>
    </div>
</header>