<?php
    // class and instance
    class Person{
        public $name;
        public $surname;
        private $age;
        public static $count = 0;

        public function __construct($name,$surname){
            $this -> name = $name;
            $this -> surname = $surname;
            self::$count++;
        }
        public function setAge($age){
            $this -> age = $age;
        }
        public function getAge(){
            return $this -> age;
        }
        public static function counter(){
            return self::$count;
        }
    }
    $p = new Person("Love","Ac-Lumor");
    $p1 = new Person("Desmond","Theodore");
    $p->setAge(30);
    // $p -> name = "Love";
    // $p -> surname = "Ac-Lumor";

    echo "<pre>";
    var_dump($p);
    echo "</pre>";

    echo $p-> name . "<br>";

    echo $p-> getAge();
    echo Person::counter();
?>