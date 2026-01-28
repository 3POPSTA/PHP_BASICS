<?php
    // file constants
    echo __DIR__ . "<br>"; //current folder directory
    echo __FILE__ . "<br>"; //current file directory
    echo __LINE__ . "<br>"; // current line in file


    //creating directory/folder
    // mkdir("testDIR");

    //rename director/folder
    // rename("testDIR","test1");

    //delete directory/folder
    // rmdir("test1");

    //read file
    echo file_get_contents("test/lorem.txt");
    $files =  scandir("../");
    echo "<pre>";
    var_dump($files);
    echo "</pre>";

    //writing file
    file_put_contents("test/lorem.txt","writing file with php");
    $users = file_get_contents("https://jsonplaceholder.typicode.com/users");
    echo $users;


?>