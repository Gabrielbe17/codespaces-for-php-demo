<?php
    // Modifica la classe Llibre perquè tingui valors per defecte en els atributs.
    class Llibre2{
        public string $titol = "Don quijote de la mancha";
        public string $autor = "Miguel de Cervantes";
    
    
        public function Descripcio() {
            return "El llibre és '". $this->titol. " i està escrit per l'autor ". $this->autor;
        }
    }

    $llibre2 = new Llibre2();
    echo $llibre2->Descripcio();

?>