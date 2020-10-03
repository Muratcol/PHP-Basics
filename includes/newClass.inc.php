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
        return $this->first." ".$this->last;
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