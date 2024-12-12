<?php

    class Persona{
        public string $nom;
        public int $edat;


        public function __construct($nom, $edat)
        {
            $this->nom = $nom;
            $this->edat = $edat;
        }


        public function mostrarMensaje(){
            return "Hola, ". $this->nom . ". Tens ". $this->edat ." anys";
        }
    }

    $persona1 = new Persona("Gabriel", 19);
    echo $persona1->mostrarMensaje();

?>