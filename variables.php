<?php
    //variable
    $name = "Mark";
    $age = 28;
    $isMale = true;
    $isFemale = false;
    $height = 1.85;
    $salary = null;

    echo $name . "<br>";
    echo $age . "<br>";
    echo $isMale . "<br>";
    echo $isFemale . "<br>";
    echo $height . "<br>";
    echo $salary . "<br>";

    //variable type
    echo gettype($name) . "<br>";
    echo gettype($age) . "<br>";
    echo gettype($isMale) . "<br>";
    echo gettype($isFemale) . "<br>";
    echo gettype($height) . "<br>";
    echo gettype($salary) . "<br>";

    var_dump($name,$age,$isMale,$isFemale,$height,$salary) . "<br>";

    echo is_string($name) . "<br>";
    echo is_int($age) . "<br>";
    echo is_bool($isMale) . "<br>";
    echo is_bool($isFemale) . "<br>";
    echo is_double($height) . "<br>";
    echo is_null($salary) . "<br>";

    //checks if variable is defined
    isset($name);

    //constants
    define("PI",3.14);
    echo PI . "<br>";

    //built-in constants
    echo SORT_ASC  . "<br>";
    echo PHP_INT_MAX  . "<br>";


?>