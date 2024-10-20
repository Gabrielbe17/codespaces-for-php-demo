<?php
    function generarTablaProductos($productos){
        foreach ($productos as $producto) {
            $nom = ucfirst($producto['nombre']);
            $precio = number_format($producto['precio'], 2);
            $disponible = ($producto['disponibilidad']) ? "<td>En stock</td>" : "<td>Agotado</td>";
            $filaRoja = !($producto['disponibilidad']) ? "class='bg-danger text-light'" : '';
            
            echo "<tr ". $filaRoja.">";
                echo "<th scope='row'>$nom</th>";
                echo "<td>$precio</td>";
                echo $disponible;
            echo "</tr>";
        }
    }
    function muestraInfoContacto($nombre, $telefono, $foto){
        echo "
            <div class='info-contacto'>
                <p><strong>Nombre: </strong> $nombre</p>
                <p><strong>Teléfono: </strong> $telefono</p>
                <p><strong>Avatar: </strong></p>
                <img src='$foto' alt='Avatar no válido.'>
            </div>
        ";
    }
?>