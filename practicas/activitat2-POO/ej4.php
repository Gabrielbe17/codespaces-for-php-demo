<?php
    

    class Persona2{
        public string $nom;
        public int $edat;


        public function __construct(string $nom, int $edat)
        {
            $this->nom = $nom;
            $this->edat = $edat;
        }


        public function mostrarMensaje() : string{
            return "Hola, ". $this->nom . ". Tens ". $this->edat ." anys";
        }
    }


    // $pers2 = new Persona2("Gabriel", 19);
    // echo $pers2->mostrarMensaje();

?>