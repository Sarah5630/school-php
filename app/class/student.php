<?php
require_once('person.php');

class Student extends Person{
    private static $effectif;
    public $level;

    public function __construct($name, $surname, $address, $level){
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->level = $level;
        self::$effectif+=1;
        
    }
    public static function getEffectif(){
      echo "Il y a ".self::$effectif." élèves dans l'école";
    }

}



?>