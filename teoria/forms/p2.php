<?php

?>
<!-- Enviamos los datos de este formulario al archivo p1.php -->
<form action="p1.php" method="POST">
    <input type="text" placeholder="Introduce tu nombre" name="name">
    <input type="number" name="age" placeholder="Introduce tu edad">
    <button type="submit">Enviar</button>

    <label>hola</label>
    <select name="asignatura[]" multiple> //seleccion multiple, le indicamos que pasará un array
        <option>Ingles</option>
        <option>Matematicas</option>
        <option>Fisica</option>
    </select>
    <br><br>

    <label for="opcion-1">
        manzana
        <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]"></input>
    </label>
    <label for="opcion-2">
        pera
        <input type="checkbox" value="Pera" id="opcion-2" name="frutas[]"></input>
    </label>
    <label for="opcion-3">
        platano
        <input type="checkbox" value="Plátano" id="opcion-3" name="frutas[]">
    </label>
</form>