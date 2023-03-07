<?php

require_once('person.php');

class Teacher extends Person{

    public $subject;

    public function __construct($name, $surname, $address, $subject){
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->subject = $subject;
        
    }
   
}



?>