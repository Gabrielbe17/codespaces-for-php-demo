<!-- 1. generarTablaProductos($productos) :
Recibe un array de productos y genera una tabla con las siguientes columnas:
Nombre del producto (la primera letra en mayúscula)
Precio (formateado con number_format )
Disponibilidad (Usa un operador ternario para mostrar "En stock" o "Agotado"). Si está agotado, la fila de la tabla debe aparecer en color rojo.

2. muestraInfoContacto($nombre, $telefono, $foto) :
Muestra la información de contacto proporcionada en el formulario en un bloque debajo de la tabla de productos.
El bloque debe incluir:
Nombre
Teléfono
Foto del perfil (usando la URL proporcionada) -->

<?php
    function generarTablaProductos($productos){
        echo "
            <tr>
                <th scope='row'>1</th>
                <td></td>
                <td></td>
            </tr>

        ";
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