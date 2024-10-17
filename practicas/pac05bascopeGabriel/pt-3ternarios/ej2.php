<?php
  
    $productos = [
        "galletas" => 12,
        "patatas" => 0,
        "cebollas" => 1
    ];
  
    function mostrarDisponibilidad($producto, $productos){
        $stock = $productos[$producto];
        return $stock > 0 ? "<p style='color: green; font-size: 1.5rem;'>Producto Disponible</p>" : "<p style='color: red; font-size: 1.5rem;'>Producto agotado</p>";
    } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <?php
        echo mostrarDisponibilidad("cebollas", $productos); 
    ?>
</body>
</html>