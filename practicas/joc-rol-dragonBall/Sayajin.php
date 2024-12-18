<?php

    class Sayajin{

        public string $nom;
        public int $hp;
        public int $atac;
        public int $defensa;

        //habilidad --> array associativo
        public $habilitat = []; 



        public function __construct($nom, $hp, $atac, $defensa, $habilitat) {
            $this->nom = $nom;
            $this->hp = $hp;
            $this->atac = $atac;
            $this->defensa = $defensa;
            $this->habilitat = $habilitat;
        }

        public function rebreDany($dany){
            if ($this->hp <= 0) {
                $this->hp = 0;
                return "Derrotat";
            }

            return $this->hp -= $dany;
        }

        public function atacar($objectiu){
            return $objectiu->hp + $objectiu->defensa -= $this->atac;
        }

        public function activarHabilitat(){
            
        }
    }

?>