<?php

    class Producte{
        public string $nom;
        public float $preu;


        public function __construct($nom, $preu) {
            $this->nom = $nom;
            $this->preu = $preu;
        }

        public function mostrarPreu(){
            return "Preu: ". $this->preu;
        }
    }

    // $prod1 = new Producte("PC", 1000.0);
    // echo $prod1->mostrarPreu();

?>