<?php
class Cotxe {
    public string $marca;
    public string $model;


    public function Descripcio() : string {
        return "El cotxe es de la marca " . $this->marca . "i el model" . $this->model;
    }
}

?>