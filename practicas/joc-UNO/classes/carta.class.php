<?php
    class Carta {
        public string $palo;
        public $num; //num o especial (string)
        public int $id;


        public function __construct(string $palo, $num, int $id){   
            $this->palo = $palo; //color de la carta
            $this->num = $num; //numero de la carta o especial
            $this->id = $id; //id carta
        }

        public function pinta_carta() {
            // mostrar la carta como elemento img html
            // ejemplo pinta carta numerada

            return "<img src='images/cartas_uno/{$this->num}_{$this->palo}.png' alt='hola'/>";
        }
        public function pinta_carta_link() {
            // mostrar la carta con un link para seleccionarla
            
        }
        public function pinta_carta_girada() {
            //mostrar carta girada (cuando esta oculta)
            return "<img src='images/cartas_uno/carta_girada.png' alt='carta_girada'/>";
        }   

    }
?>