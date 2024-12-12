<?php 

    class Calculadora{

        public function sumar(int $num1, int $num2) : int{
            return $num1 + $num2;
        }

        public function restar(int $num1, int $num2) : int{
            return $num1 - $num2;
        }

        public function multiplicar(int $num1, int $num2) : int{
            return $num1 * $num2;
        }

        public function dividir(int $num1, int $num2) : float{
            if($num2 != 0){
                return $num1 / $num2;
            } else {
                return "Error: No es pot dividir per zero.";
            }
        }

    }

?>