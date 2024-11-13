<!-- un header amb el nom de l'usuari, el nivell de dificultat i la seva foto de perfil. -->
<header class="position-absolute top-0 start-0 w-100 bg-dark text-light">
    <!-- <img src="" alt="">     -->
    <div class="container">
        <h4><?= $_SESSION['nom']?></h4>
        <p>Nivel: <span><?= $_SESSION['nivel']?></span></p>
    </div>
</header>