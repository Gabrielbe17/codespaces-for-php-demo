<?php


?>
<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sombrero Seleccionador de Hogwarts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            *{
              box-sizing: border-box;
            }
            body{
                display: flex;
                align-items: center;
                min-height: 100vh;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center mb-4">Benvinguts a Hogwarts</h1>
        
            <!-- FORMULARIO -->
            <div class="container-fluid">
                <div class="container text-center my-5">
                    <h1>Hola!</h1>
                    <p>Si us plau, completa els següents camps.</p>
                </div>

                <div class="container">
                    <form class="row g-3 needs-validation d-flex flex-column align-items-center" action="bienvenida.php" method="POST" novalidate>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Nom: </label>
                            <input type="text" class="form-control" id="validationCustom01" value="" name="nom" required>
                            <div class="invalid-feedback">
                                Introdueix un nom.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Cognom: </label>
                            <input type="text" class="form-control" id="validationCustom01" value="" name="cognom" required>
                            <div class="invalid-feedback">
                                Introdueix un cognom.
                            </div>
                        </div>

                        <div class="col-md-4 text-center">
                            <button class="btn btn-primary w-100" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>