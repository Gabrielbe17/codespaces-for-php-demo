<?php
    include 'ej7.php';

    $llista = [
        new Producte("Pc Gaming", 1000.0),
        new Producte("Iphone", 800.0),
        new Producte("Tauleta", 299.99),
        new Producte("Auriculars sense fil", 79.99),
        new Producte("Ratolí", 39.99)
    ];




    echo "<table border='1'>
        <tr>
            <th>Nom del producte</th>
            <th>Preu</th>
        </tr>";


    foreach ($llista as $producte) {
        echo "<tr>
            <td>{$producte->nom}</td>
            <td>{$producte->preu} €</td>
        </tr>";
    }
    echo "</table>";

?>