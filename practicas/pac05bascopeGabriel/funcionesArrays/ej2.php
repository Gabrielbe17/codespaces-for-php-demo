<?php
    function ordenarArrayAlfabetico($nombres){
        sort($nombres);
        for ($i=0; $i < count($nombres); $i++) { 
            echo $nombres[$i] . "<br>";
        }
    }

    ordenarArrayAlfabetico(["vaso", "antonio", "triple"]);
?>