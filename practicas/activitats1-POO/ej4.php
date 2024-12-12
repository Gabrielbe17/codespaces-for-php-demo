<?php

    // Tipa les propietats i els mètodes de la classe Llibre . Afegeix un mètode getAutor() que retorni l'autor.
    class Llibre4{
        public string $titol; 
        public string $autor;
    
        public function __construct(string $titol, string $autor) {
            $this->titol = $titol;
            $this->autor = $autor;
        }
        public function Descripcio() : string {
            return "El llibre és '". $this->titol. " i està escrit per l'autor ". $this->autor;
        }

        public function getAutor(): string {
            return $this->autor;
        }
    }

    $llibre2 = new Llibre4("Blue giant", "Shinichi Ishizuka");
    echo $llibre2->Descripcio();
?>