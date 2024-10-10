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
?> 