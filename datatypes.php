<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes</title>
</head>
<body>
    <?php
        //null
        $data = null;

        //boolean
        $bool1 = true;
        $bool2 = false;

        //arrays
        $foo = -3; // negative
        $foo = 0; // zero (can also be null or false (as boolean)
        $foo = 123; // positive decimal
        $bar = 0123; // octal = 83 decimal
        $bar = 0xAB; // hexadecimal = 171 decimal
        $bar = 0b1010; // binary = 10 decimal
        var_dump(0123, 0xAB, 0b1010,"name",true,3.1); // output: int(83) int(171) int(10)


        $arr = array(1,2,3,4,5,6,7,8,9,0);
        $names = ["mark","ben","joe"];
        echo $names[2];
        echo $names;
        echo $arr;

        $array = array();
        $array["foo"] = "bar";
        $array["baz"] = "quux";
        $array[42] = "hello<br>";
        echo $array["foo"]; // Outputs "bar"
        echo $array["bar"]; // Outputs "quux"
        echo $array[42]; // Outputs "hello"

        //strings
        $string = "string";
        echo $string[0], "<br>";

        //objects
        $obj = new stdClass();

        $obj -> name = "Donyo";
        $obj -> age = 24;
        $obj -> country = "Ghana";

        echo $obj -> name;
        echo $obj -> age;
        echo $obj -> country;

        //resource
        $file = fopen("test.txt","r");
        echo $file;
        var_dump($file);

        $conn = mysqli_connect("localhost","root","","test_db");
        var_dump($conn);


    ?>
</body>
</html>