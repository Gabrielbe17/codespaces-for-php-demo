<?php

    class Calculadora{

        public function sumar(int $num1, int $num2) : int{
            return $num1 + $num2;
        }
    }


    $calculadora = new Calculadora();
    echo $calculadora->sumar(5, 10);
?>