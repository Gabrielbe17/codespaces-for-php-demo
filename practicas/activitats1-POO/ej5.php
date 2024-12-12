<?php
    // Crea una classe Persona amb atributs nom i edat . Afegeix un mètode saludar() que mostri un missatge com "Hola, sóc Anna i tinc 25 anys."

    class Persona{
        public string $nom = "Gabriel";
        public int $edat = 19;

        public function Saludar() {
            return "Hola, sóc ". $this->nom. " i tinc ". $this->edat. " anys.";
        }
    }

?>