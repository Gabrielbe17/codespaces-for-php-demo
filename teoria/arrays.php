<?php

// 1.1 ARRAY ESCALAR INDEXADO
$estudiantes = array('Didac', 'David', 'Lucía');
//echo $estudiantes;

//var_dump($estudiantes);
print_r($estudiantes);
echo "<br>";

// 1.2 (DESDE LA VERSION 5.4 PHP)
$lista = ["Didac", "Kevin", "Gabriel"];
echo $lista[1];


$lista[1] = "Yehor";


//añadir elementos a un array
$colores = ['rojo', 'azul', 'verde'];
$colores[] = 'Naranja';
echo "<br>";


// 2 . ARRAYS ASOCIATIVOS
echo "<br>Arrays asociativos<br><br>";
$tutor = ['Albert', 'barcelona'];
$tutor = [
    "nombre" => "Albert",
    "apellidos" => "Arrebola Sans",
    "edad" => 36

    //key => value
];

echo $tutor["edad"];
echo "<br>";

$tutor["edad"] = 18;
echo $tutor["edad"];

echo "<br><br>";


//RECORRER ARRAY CON UN FOR
echo "Recorremos array<br>";
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
for ($i=0; $i < count($numeros); $i++) { 
    echo $numeros[$i] . '<br>';
}
echo "<br>";

//RECORRER UN ARRAY CON UN FOREACH
echo "Recorremos array con un foreach<br>";
foreach ($numeros as $num) {
    echo ($num *2) . " ";
}

//Recorrer un array asociativo (clave, valor)
echo "<br><br>Recorremos array asociativo con un foreach<br><br>";
$ciudades = [
    "Paris" => "Francia",
    "Barcelona" => "Espanya",
    "Londres" => "Reino Unido"
];

foreach ($ciudades as $ciudad => $pais) {
    //echo "La ciudad de " . $ciudad . " esta en " . $pais . "<br>";
    if ($ciudad ==  "Paris") {
        echo "La ciudad de " . $ciudad . " esta en " . $pais . "<br>";
    }
}


//foreach en arrays multidimensionales
//Crea un array multidimensional de estudiantes y sus notas, y recorre cada estudiante con foreach para mostrar sus datos.

echo "<br>Recorremos arreglo estudiantes (multidimensional)<br>";
$estudiantes = [
    ["nombre" => "Anna", "nota" => 10, "genero" => 'm'],
    ["nombre" => "Dani", "nota" => 10, "genero" => 'h'],
    ["nombre" => "Yehor", "nota" => 12, "genero" => 'h'],
    ["nombre" => "Didac", "nota" => 10, "genero" => 'h'],
    ["nombre" => "David", "nota" => 10, "genero" => 'h'],
    ["nombre" => "Gabriel", "nota" => 8, "genero" => 'h'],
];

foreach ($estudiantes as $estudiante) {
    $genero = $estudiante["genero"];
    if ($genero == 'h') {
        echo "El estudiante: {$estudiante['nombre']} ha sacado un {$estudiante['nota']}" . "<br>";
    }else{
        echo "La estudiante: {$estudiante['nombre']} ha sacado un {$estudiante['nota']}" . "<br>";
    }
    
}




?>