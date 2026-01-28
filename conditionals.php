<?php
    $age = 20;
    $salary = 300000;

    if($age == 20){
        echo "1" . "<br>";
    }
    if($age == 20) echo "1" . "<br>";

    //if-else
    if($age > 20) echo "1" . "<br>";
    else echo "2" . "<br>";
    //same as
    // if($age > 20){
    //     echo "1";
    // }
    // else{
    //     echo "2";
    // }

    //difference between == and ===
    $age == 20; //true
    $age == "20"; //true

    $age === "20"; //false
    $age === 20; //true

    //if AND
    if($age == 20 && $salary === 300000){
        echo "high pay" . "<br>";
    }

    //if OR
    if($age == 20 || $salary === 300000){
        echo "high pay" . "<br>";
    }

    //ternary if
    echo $age < 22 ? "young" : "old";

    //short ternary
    $myAge = $age ?: 18;
     echo "<pre>";
    var_dump($myAge);
    echo "</pre>";

    //null coalescing operator
    $myName = isset($name) ? $name : "John";
    $myName = $name ?? "John";

    //switch
    $userRole = "admin";
    switch($userRole){
        case "admin":
            echo "You admin";
            break;
        case "editor":
            echo "You editor";
            break;
        case "user":
            echo "You user";
            break;
        default:
        echo "invalid role";
    }




?>