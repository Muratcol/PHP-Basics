<?php


class Person {
    //Properties
    public $first;
    public  $last;
    public $age;

    //Function Sample
    public function setName(string $name, string $lastName){
        $this->first = $name;
        $this->last = $lastName;
    }
    
    public function getName() {
        return $this->first." ".$this->last."\n".$this->age;
    }

    //Constructor
    public function __construct($name, $lastName, $age) {
        $this->name = $name;
        $this->last = $lastName;
        $this->age = $age;
    }
}

// Inheritance
// class Pet extends Person{
//     public function owner(){
//         $a = $this->first;
//         return $a;
//     }
// }



?>