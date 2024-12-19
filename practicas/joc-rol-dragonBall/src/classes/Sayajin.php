<?php

    class Sayajin{

        public int $id;
        public string $nom;
        public int $salut;
        public int $dany;
        public string $imatge;

        //habilidad --> array associativo
        public $habilitats = []; 



        public function __construct($id, $nom, $salut, $dany, $imatge, $habilitats) {
            $this->nom = $nom;
            $this->salut = $salut;
            $this->dany = $dany;
            $this->imatge = $imatge;
            $this->habilitats = $habilitats;
        }

        public function obtenirHabilitats(){
            // Retorna les habilitats com una cadena separada per comes.
            return implode(", ", $this->habilitats);
        }
    }

?>