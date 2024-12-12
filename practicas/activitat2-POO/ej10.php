<?php

    class Producte{
        public string $nom;
        public float $preu;

        public function __construct($nom, $preu) {
            $this->nom = $nom;
            $this->preu = $preu;
        }
    }


    $llista = [
        new Producte("Ordinador portàtil", 899.99),
        new Producte("Telèfon mòbil", 499.99),
        new Producte("Tauleta", 299.99),
        new Producte("Auriculars sense fil", 79.99),
        new Producte("Ratolí ergonòmic", 39.99)
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