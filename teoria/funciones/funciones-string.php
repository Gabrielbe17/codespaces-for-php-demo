<?php
//1. longitud de caracteres --> strlen()

$cadena = "hola mundo";
echo strlen($cadena);

//2. strpos
echo "<br>";
echo strpos($cadena, "mundo");


//3. str_replace
echo "<br>";
echo str_replace("mundo", "barcelona", $cadena);

//4. strtolower
echo "<br>";
echo strtolower($cadena);

//5. toupper
echo "<br>";
echo strtoupper($cadena);

//6. ucfirst
echo "<br>";
echo ucfirst($cadena);

//7. ucwords
echo "<br>";
echo ucwords($cadena);

//8. trim
$cadena2 = '   leo    messi   ';
echo "<br>";
echo trim($cadena2);

//9. substr()
//obtiene una parte de una cadena
echo "<br>";
echo substr($cadena2, 4, 4);


//10. implode
echo "<br>";
$array = ["Hola", "mundo", "php"];
echo implode(" ", $array);

//11. explode
// transforma una cadena en un array (inverso de implode)
echo "<br>";
$cadena = "Hola,Mundo,Php";
$array = explode(",", $cadena);
print_r($array);


//12. in_array() mira si existe o no en un array
echo "<br>";
$os = ["Mac", "NT", "Itix", "Linux"];
if (in_array("Irix", $os)) {
    echo "Existe Irix";
}

//13. array_search
//busca un valor en un array y devuelve la clave correspondiente, si no está saca false
echo "<br>";
$array = ["manzana", "pera", "naranja"];
echo array_search("naranja", $array);

//14. array_map
echo "<br>";
$arraymap = [1, 2, 3, 4];
$resultado = array_map(function($numero) {
    return $numero * 2;
}, $arraymap);
print_r($resultado);


//15. array_filter()
echo "<br>";
$arrayfilter = [1,2,3,4,5,6,7,8];
$resultado = array_filter($arrayfilter, function($n){
    return $n % 2 == 0;
});
print_r($resultado);



?> 

