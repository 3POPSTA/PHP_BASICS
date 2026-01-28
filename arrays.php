<?php
    $fruits = ["Banana","apple","mango","avocado",4];

    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";

    echo $fruits[1] . "<br>";

    isset($fruits);

    //append element
    $fruits[] = "Pear";
    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";

    //lenght of array
    echo count($fruits) . "<br>";
    
    //add elemnt at the end of array
    array_push($fruits,"star fruit");
    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";

    //remove the last element of an array
    array_pop($fruits);
    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";

    //add element at the beginning of an array
    array_unshift($fruits,"pineapple");
    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";

    //remove element at the beginning of an array
    array_shift($fruits);
    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";

    //split string into array
    $str = "I love coding in php";
    echo "<pre>";
    var_dump(explode(" ",$str));
    echo "</pre>";

    //combine array into string
    echo implode(" ",$fruits) . "<br>";
    var_dump(implode(" ",$fruits)). "<br>";

    //check if element exist in an array 
    echo "<pre>";
    var_dump(in_array("mango",$fruits));
    echo "</pre>";

    //search element index
    echo "<pre>";
    var_dump(array_search("apple",$fruits));
    echo "</pre>";
    

    //merge two arrays
    $veggies = ["tomatoes","rice"];
    echo "<pre>";
    var_dump(array_merge($fruits,$veggies));
    var_dump([...$fruits,...$veggies]);
    echo "</pre>";
    

    //sorting an array
    sort($fruits); //rsort() fo reverse sort
    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";

    //creating an associative array
    $person = [
        "name" => "Brad",
        "surname" => "Traversy",
        "age" => 30,
        "hobbies" => ["gaming","reading"]
    ];
    echo "<pre>";
    var_dump($person);
    echo "</pre>";

    echo "<pre>";
    print_r($person);
    echo "</pre>";

    //get element by key
    echo $person["name"] . "<br>";

    //set element by key
    $person["channel"] = "TraversyMedia";
    echo "<pre>";
    var_dump($person);
    echo "</pre>";

    //null coalescing assignment operator
    $person["address"] ??= "unknown";
    echo "<pre>";
    var_dump($person);
    echo "</pre>";

    //print the keys of arrays
    echo "<pre>";
    var_dump(array_keys($person));
    echo "</pre>";
    
    //print the values of array
    echo "<pre>";
    var_dump(array_values($person));
    echo "</pre>";

    //sorting associative array by values
    asort($person);
    echo "<pre>";
    var_dump($person);
    echo "</pre>";

    //sorting by keys
    ksort($person);
    echo "<pre>";
    var_dump($person);
    echo "</pre>";

    //2D arrays
    $todos = [
        ["title" => "Todo title 1","completed"=>true],
        ["title" => "Todo title 2","completed"=>false],
    ];
    echo "<pre>";
    var_dump($todos);
    echo "</pre>";

?>