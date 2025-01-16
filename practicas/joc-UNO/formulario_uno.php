<?php


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-black text-white">
                        <h2 class="text-center mb-0">Juega al UNO</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="njugadores" class="form-label">Número de Jugadores:</label>
                                <input type="number" class="form-control" id="njugadores" name="njugadores" min="1" max="10" required>
                            </div>
                            <div class="mb-3">
                                <label for="ncartas" class="form-label">Número de Cartas por Jugador:</label>
                                <input type="number" class="form-control" id="ncartas" name="ncartas" min="1" max="15" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info btn-lg">Iniciar Juego</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
