<?php
    // Modifica la classe Llibre perquè tingui valors per defecte en els atributs.
    class Llibre3{
        public string $titol; 
        public string $autor;
    
        public function __construct(string $titol, string $autor) {
            $this->titol = $titol;
            $this->autor = $autor;
        }
        public function Descripcio() {
            return "El llibre és '". $this->titol. " i està escrit per l'autor ". $this->autor;
        }
    }

    $llibre2 = new Llibre3("Blue giant", "Shinichi Ishizuka");
    echo $llibre2->Descripcio();

?>