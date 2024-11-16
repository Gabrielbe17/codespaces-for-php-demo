<?php
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $_SESSION['nom'] = $_POST['username'];
        $_SESSION['nivel'] = $_POST['nivell'];
        $_SESSION['current_room'] = 1;

        if (isset($_POST['image'])){
            $_SESSION['image'] = $_POST['image'];
        }
        
        header('Location: room1.php');
        exit();  
    }
    // session_destroy();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inici</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://basementescaperoom.com/los-angeles/template/images/room-header-bg-thebasement.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Benvingut!</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Nom:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dificultat" class="form-label">Nivell de Dificultat:</label>
                <select name="nivell" id="dificultat" class="form-select" required>
                    <option value="">Selecciona un nivell</option>
                    <option value="facil">Fàcil</option>
                    <option value="mig">Mig</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto (url): </label>
                <input type="url" name="image" id="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary w-100">Comença el Joc</button>
        </form>
    </div>
</body>
</html>
