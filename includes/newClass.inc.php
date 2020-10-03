<?php


class Person {
    //Properties
    public $first;
    public  $last;
    public $age;

    //Function Sample
    public function setName($name, $lastName){
        $this->first = $name;
        $this->last = $lastName;
    }
    
    public function getName($person) {
        return $this->first." ".last;
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