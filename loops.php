<?php 

    //while loop
    $counter = 0;
    while($counter < 10){
        echo $counter . "<br>";
        if($counter === 5) break;
        $counter++;
    }

    //do while loop
    $counte = 0;
    do{
        echo $counte;
        $counte++;
    }
    while($counte < 5);

    //for loop
    for($i = 0; $i < 10; $i++){
        echo $i . "<br>";
    }

    //foreach loop
    $fruits = ["mango","banana","apple","orange"];
    foreach($fruits as $fruit){
        echo $fruit . "<br>";
    }
    $people = ["mark","joe","dickson","samson"];
    foreach($people as $u => $users){
        echo $u . " " . $users . "<br>";
    }

    //iterate over associative array
    $person = [
        "name" => "Brad",
        "surname" => "Traversy",
        "age" => 30,
        "hobbies" => ["tennis","gaming"]
    ];

    foreach($person as $key => $value){
        if(is_array($value)){
            echo $key . " " . implode(",",$value) . "<br>";
        }
        else{
            echo $key . " " . $value . "<br>";
        }
    }

?>