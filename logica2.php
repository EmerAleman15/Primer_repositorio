<?php
function operaciones(){
    $suma = $_REQUEST['uno'] + $_REQUEST['dos'];
    $resta = $_REQUEST['uno'] - $_REQUEST['dos'];
    $multi = $_REQUEST['uno'] * $_REQUEST['dos'];
    $divi = $_REQUEST['uno'] / $_REQUEST['dos'];
    echo "La suma de los dos números es: $suma";
    echo "<br>";
    echo "La resta de los dos números es: $resta";
    echo "<br>";
    echo "La multplicación de los dos números es: $multi";
    echo "<br>";
    echo "La división de los dos números es: $divi";
    }
    echo operaciones();
?>