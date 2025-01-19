<?php
    class Baraja{
        public $conjunto_cartas = [];

        public function crea_baraja(){
            // generar todas las cartas de juego

            foreach (["red", "yellow", "blue", "green"] as $color) {
                // para cada color, crear baraja
                for($i = 1; $i <= 9; $i++){
                    // como generar id?
                    $this->conjunto_cartas[] = new Carta($color, $i, $i);
                }

                // cartas especiales
                $this->conjunto_cartas[] = new Carta($color, 'skip', 11); // skip
                $this->conjunto_cartas[] = new Carta($color, 'picker', 12); // +2
                $this->conjunto_cartas[] = new Carta($color, 'reverse', 13); // reversa
            }
        }

        public function mezcla(){
            //Baralla les cartes aleatòriament. Utilitza la funció shuffle() de PHP
            // per reorganitzar l'array conjunto_cartas.

            shuffle($this->conjunto_cartas);
        }
        public function pinta_baraja(){
            // muestra todas las cartas, usando el metodo pinta carta de cada objeto carta en conjunto_cartas[]
            foreach ($this->conjunto_cartas as $carta) {
                $carta->pinta_carta(); //?
            }
        }
        public function pinta_baraja_girada(){
            // Muestra todas las cartas giradas usando el metodo pinta_carta_girada()
        }
    }

?>