<?php

    class Sayajin
    {
        //se puede definir o no(null) --> // public string $nombre;

        //se puede tipar
        public string $nombre = "Goku";
        public int $nivel_pelea = 1000;
    

        //metodos --> capitalizada, tambien se puede tipar
        //$this --> hace referencia al objeto actual instanciado a partir de la clase    

        public function Saludar() : string{
            return "Hola, mi nombre es " . $this->nombre;
        }

        public function NivelDePelea() : int {
            return $this->nivel_pelea;
        }
        
    }


    // var_dump(Sayajin)
    //creando OBJETO de la clase Sayajin
    $vegeta = new Sayajin();
    // acceder a propiedades y metodos del objeto con ->
    echo $vegeta->Saludar();
    echo $vegeta->NivelDePelea();
    echo "<br>";

    $goku = new Sayajin();
    echo $goku->Saludar();
    echo $goku->NivelDePelea();


    //los constructores existen para cambiar las propiedades de un objeto (sesion 2)

    // ...
?>