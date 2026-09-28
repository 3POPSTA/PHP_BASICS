<?php
    //declaring numbers
    $a = 5;
    $b = 4;
    $c = 1.2;

    //arithemtic operations
    echo $a - $b . "<br>";
    echo $a + $b . "<br>";
    echo $a * $b . "<br>";
    echo $a / $b . "<br>";
    echo $a % $b . "<br>";
    echo ($a + $b) * $c . "<br>";

    //assignment with math operators
    // $a += $b; echo $a . "<br>";
    // $a -= $b; echo $a . "<br>";
    // $a *= $b; echo $a . "<br>";
    // $a /= $b; echo $a . "<br>";
    // $a %= $b; echo $a . "<br>";

    //increment operator
    echo $a++ . "<br>";
    echo ++$a . "<br>";

    //decrement operator
    echo $a-- . "<br>";
    echo --$a . "<br>";

    //number checking functions
    is_float(1.25); //true
    is_double(1.24); //true
    is_int(5); //true
    is_numeric("3.34"); //true
    is_numeric("e4"); //false

    //conversion
    $strNumber = "12.34";
    $num = (int)$strNumber;
    echo $num . "<br>";
    echo (float)$num . "<br>";

    //number functions
    echo abs(-15) . "<br>";
    echo pow(2,3) . "<br>";
    echo sqrt(16) . "<br>";
    echo max(1,4,67,8) . "<br>";
    echo min(1,4,67,8) . "<br>";
    echo round(2.6) . "<br>";
    echo floor(2.6) . "<br>";
    echo ceil(2.6) . "<br>";

    //number formating
    $number = 123456789.12345;
    echo number_format($number,2,".",","). "<br>";
    echo number_format($number,2,"."," "). "<br>";
?>