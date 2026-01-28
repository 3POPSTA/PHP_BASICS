<?php
    // print current date
    echo date("Y-m-d H:i:s") . "<br>";
    
    //print yesterday
    echo date("Y-M-D H:i:s",time() - 60 * 60 * 24 ). "<br>";
    
    //different date formate
    echo date("F j Y, H:i:s") . "<br>";

    //print current timestamp
    echo time() . "<br>";

    //parse date
    $parsedDate = date_parse("2026-01-23 21:15:34");
    echo "<pre>";
    var_dump($parsedDate);
    echo "</pre>";


?>