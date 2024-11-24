<?php
    session_start();

    if (!isset($_SESSION['historialJugadas'])) {
        $_SESSION['historialJugadas'] = [];
    }

    if (isset($_GET['tipoApuesta']) && isset($_GET['valorApuesta']) && isset($_GET['cantidad'])) {
        $tipoApuesta = $_GET['tipoApuesta'];
        $valorApuesta = $_GET['valorApuesta'];
        $cantidadApuesta = $_GET['cantidad'];    
        
        $jugada = ["id" => count($_SESSION['historialJugadas'])+1,"tipoApuesta" => $tipoApuesta, "valorApuesta" => $valorApuesta, "cantidadApuesta" => $cantidadApuesta];

        array_push($_SESSION['historialJugadas'], $jugada);
    }

    function mostrarHistorial(){

        $lista = "";
        foreach ($_SESSION['historialJugadas'] as &$jugada) {
            $lista .= "
                <tr>
                    <td>{$jugada['id']}</td>
                    <td>{$jugada['tipoApuesta']}</td>
                    <td>{$jugada['valorApuesta']}</td>
                    <td>{$jugada['cantidadApuesta']}€</td>
                </tr>
            ";
        }
        return $lista;
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruleta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
        }
        .container > *{
            margin-bottom: 1rem;
        }
        .form-group, input{
            /* background-color: red !important; */
            width: 100% !important;
        }
        button[type="submit"]{
            padding: .5rem 1rem;
            width: 100%;
        }
        img#ruleta{
            animation: rotar 2s infinite linear;
        }
        @keyframes rotar {
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- tabla -->
        <div class="row d-flex justify-content-center align-items-center flex-wrap">
            <div class="col-md-4">
                <img src="assets/ruleta.png" alt="" style="width: 18rem;" id="ruleta">
            </div>
            <div class="col-md-4">
                <img src="assets/apuestas-ruleta.jpg" alt="apuestas" style="width: 30rem;">
            </div>
        </div>
        <br>
        <h2 class="text-center mb-4">Tabla de Apuestas</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Apuesta</th>
                    <th>Se juega a</th>
                    <th>Premio</th>
                    <th>Ejemplo en la imagen (ficha)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rojo/Negro</td>
                    <td>Se apuesta al color del número ganador, si será rojo o negro. Con esta apuesta se está jugando a 18 números, ya que hay 18 números rojos y 18 negros.</td>
                    <td>1 x 1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Par/Impar</td>
                    <td>Se apuesta a si el número donde cae la bola será par o impar. Con esta apuesta se está jugando a 18 números, bien a los 18 pares o impares.</td>
                    <td>1 x 1</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Pasa/Falta</td>
                    <td>Se trata de apostar si el número estará entre 1-18 (falta) o 19-36 (pasa). Por tanto, se juega a 18 números.</td>
                    <td>1 x 1</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Docena</td>
                    <td>Se apuesta a qué docena estará el número ganador. El tapete se divide en 3 docenas, cada una abarca 12 números. Se juega a 12 números.</td>
                    <td>2 x 1</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Columna</td>
                    <td>Se apuesta a qué columna estará el número ganador. El tapete se divide en 3 columnas, cada una alberga 12 números. Se juega a 12 números.</td>
                    <td>2 x 1</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Dos docenas</td>
                    <td>Se apuesta a dos docenas contiguas, es decir, se puede apostar a las docenas 1 y 2, o a las docenas 2 y 3. Se juega a 24 números.</td>
                    <td>0,5 x 1</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>Dos columnas</td>
                    <td>Se apuesta a dos columnas contiguas. Se puede apostar a las columnas 1 y 2 o a las columnas 2 y 3. Se juega a 24 números.</td>
                    <td>0,5 x 1</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Seisena</td>
                    <td>Se apuesta a 6 números con una sola apuesta. Los 6 números están en dos filas contiguas.</td>
                    <td>5 x 1</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>Cuadro</td>
                    <td>Se apuesta a 4 números con una sola apuesta. Esta apuesta se realiza sobre 4 números que forman un cuadrado en el tapete.</td>
                    <td>8 x 1</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>Transversal</td>
                    <td>Se apuesta a 3 números en una fila. Existen dos variaciones: a los números 0, 1 y 2 o a 0, 2 y 3.</td>
                    <td>11 x 1</td>
                    <td>10, 11, 12</td>
                </tr>
                <tr>
                    <td>Caballo</td>
                    <td>Se apuesta a 2 números contiguos en el tapete de manera horizontal o vertical.</td>
                    <td>17 x 1</td>
                    <td>13, 14</td>
                </tr>
                <tr>
                    <td>Pleno</td>
                    <td>Se apuesta a un solo número.</td>
                    <td>35 x 1</td>
                    <td>15</td>
                </tr>
            </tbody>
        </table>

        <!-- Formulario Apuesta -->
        <h2 class="text-center mb-4">Formulario de Apuestas</h2>
        <form action="resultado.php" method="get" class="border p-3 bg-body">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo apuesta</label>
                <select class="form-control" id="selectTipoApuesta" name="tipoApuesta" required>
                    <option>Rojo/Negro</option>
                    <option>Par/Impar</option>
                    <option>Pasa/Falta</option>
                    <option>Pleno</option>
                    <option>Docena</option>
                    <option>Columna</option>
                    <option>Dos docenas</option>
                    <option>Dos columnas</option>
                    <option>Seisena</option>
                    <option>Cuadro</option>
                    <option>Transversal</option>
                    <option>Caballo</option>
                </select>
            </div>
            <br>
            <!-- Select que se genera DINÁMICAMENTE, segun qué tipo de apuesta escoje el usuario -->
            <div class="form-group">
                <label for="exampleFormControlSelect2">¿A qué apuestas?</label>
                <select class="form-control" id="selectPosiblesApuestas" name="valorApuesta" required>

                </select>
            </div>
            <br>
            <!-- Campo Cantidad a apostar -->
            <div data-mdb-input-init class="form-group" style="width: 22rem;">
                <!-- <i class="fas fa-dollar-sign trailing"></i> -->
                <label class="form-label" for="form1">Cantidad de dinero</label>
                <input type="number" id="form1" class="form-control form-icon-trailing" name="cantidad" min="1" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
    </div>
    <div class="position-absolute top-0 left-0 border p-3" style="height: 40rem; width: auto">
        <!-- mostrar historial de jugadas -->
        <h4 class="text-center p-3">Historial de Jugadas</h4>    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipo Apuesta</th>
                    <th scope="col">Valor Apuesta</th>
                    <th scope="col">Cantidad Apostada</th>
                </tr>
            </thead>
            <tbody>
                <?= mostrarHistorial();?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="scripts/main.js"></script>
</body>
</html>