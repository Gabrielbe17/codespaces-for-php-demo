<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="../data/assets/logo-mercadona.png" alt="logo-mercadona" class="img-fluid" style="height: 50px;">
        </a>
        
        <div>
            <!-- mensajes + avatar foto perfil --> 
            <div class="d-flex align-items-center">
                <h4 class="me-3 mb-0 px-4">Bienvenido, <?php echo (isset($_POST['name'])) ? ucfirst($_POST['name']) : 'Alumno' ?>!</h4>
                <img src= <?php echo (isset($_POST['url'])) ? $_POST['url'] : '' ?> alt="Avatar" class="rounded-circle" style="width: 50px; height: 50px;">
            </div>
            <!-- Navegación  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </div>
</header>