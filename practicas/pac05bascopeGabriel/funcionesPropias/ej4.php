<?php
function convertirTemperatura($temperatura, $escala){
    // (0 °C × 9 / 5) + 32 = 32 °F (conversión a fahrenheit)
    // (32 °F − 32) × 5 / 9 = 0 °C (conversión a celsius)

    switch ($escala) {
        case 'C':
            $resultado = (($temperatura - 32) * 5) / 9;
            return $resultado;
        case 'F':
            $resultado = (($temperatura * 9) / 5) + 32;
            break;
        default:
            $resultado = "Error";
    }
}

echo convertirTemperatura(123, 'C');
?>