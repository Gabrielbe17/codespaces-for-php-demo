<?php
    class Cotxe2{
        public string $marca = "Ford";
        public string $model = "Fiesta";


        public function Descripcio() : string {
            return "El cotxe es de la marca " . $this->marca . " i el model es  " . $this->model;
        }
    }

    $cotxe = new Cotxe2();
    echo $cotxe->Descripcio();

?>