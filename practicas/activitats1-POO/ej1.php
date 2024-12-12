<?php
// Crea una classe Llibre amb atributs titol , autor i un mètode descripcio() que retorni una descripció del llibre.
    class Llibre{
        public string $titol = "Don quijote de la mancha";
        public string $autor = "Miguel de Cervantes";
    
    
        public function Descripcio() {
            return "El llibre és '". $this->titol. " i està escrit per l'autor ". $this->autor;
        }
    }

    $llibre1 = new Llibre();
    echo $llibre1->Descripcio();
    
?>