<?php

    class Animal{
        public string $nom;
        public string $tipus;

        public function __construct(string $nom, string $tipus){
            $this->nom = $nom;
            $this->tipus = $tipus;
        }
      
        public function Saludar(){
            return "Hola, sóc un ". $this->tipus. " i em dic ". $this->nom;
        }
    }

    $animal1 = new Animal("Vaca", "Mamífer");
    echo $animal1->Saludar();
?>