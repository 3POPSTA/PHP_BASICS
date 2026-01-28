<?php
    //simple strings
    $name = "AC";
    $str1 = 'Hello $name';
    $str2 = "Hello $name";

    echo $str1 . "<br>";
    echo $str2 . "<br>";
    echo "---------------<br>";
    //string functions
    $string = "     Hello world     ";
    echo strlen($string) . "<br>";
    echo trim($string) . "<br>";
    echo ltrim($string) . "<br>";
    echo rtrim($string) . "<br>";
    echo str_word_count($string) . "<br>";
    echo strrev($string) . "<br>";
    echo strtoupper($string) . "<br>";
    echo strtolower($string) . "<br>";
    echo ucfirst($string) . "<br>";
    echo lcfirst($string) . "<br>";
    echo ucwords($string) . "<br>";
    echo strpos($string,"world") . "<br>";
    echo stripos($string,"world") . "<br>";
    // echo str_repeat("world","Php",$string);


    //multiline text and line breaks
    $longText = "
        Hello, my name is <b>zura</b>
        I am <b>27</b>,
        I love <b>coding</b>
    ";

    echo $longText . "<br>";
    echo nl2br($longText)."<br>";
    echo htmlentities($longText) ."<br>";
    echo nl2br(htmlentities($longText)) . "<br>";





?>