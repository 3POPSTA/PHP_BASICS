<?php
    // simple function
    function greet(){
        echo "Hellooo</br>";
    }
    greet();

    //function with argument
    function sayHello($name){
        return "hello $name </br>";
    }
    echo sayHello("Love");

    // function sum(...$nums){
    //     $sum = 0;
    //     foreach($nums as $numbers){
    //         $sum += $numbers;
    //     }
    //     return $sum;

    // }
    // echo sum(1,2,3,4,5,6);

    //arrow function
    function sum(...$nums){
        return array_reduce($nums,fn($carry,$n) => $carry + $n );
    }
    echo sum(1,2,3,4,5,6);
    
    

    ?>