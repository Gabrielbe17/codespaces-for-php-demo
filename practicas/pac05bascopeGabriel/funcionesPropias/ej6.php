<?php
    function esPar($numero){
        $result = ($numero % 2 == 0) ? "true" : "false";
        return $result; 
    }
    echo esPar(10);
?>