<?php

    abstract class Person{
    protected $name;
    protected $surname;
    protected $address;

    public function getEtatCivil(){
       
        return
        $this->name."<br>".
        $this->surname."<br>".
        $this->address;

    }


}








?>