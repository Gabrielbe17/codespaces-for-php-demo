<?php
    session_start();

    //inicializar el carrito
    if(!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    var_dump($_SESSION['carrito']);


    //añadir productos al carrito, desde un formulario, por metodo post
    $item = $_POST['item'];


    // $_SESSION['carrito'][] = $item; //equivalente a hacer un push 

    function addItem($item){
        array_push($_SESSION['carrito'], $item); //forma 2 de hacer un push a la variable array carrito de la sesión 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <form method="post">
        <input type="text" name="item" placeholder="Producto">
        <button type="submit">Agregar al carrito</button>
    </form>

    <section>
        <h3>Productos de Carrito</h3>
        //tabla productos carrito
        /*
            se hace un foreach del array carrito y se van introduciendo los datos
        */
        <?php addItem($item)?>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['carrito'] as $item):?>
                    <tr>
                        <td><?php echo $item;?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </section>
</body>
</html>