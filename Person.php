<?php

class Person{
    public $age;

    public function setAge($setAge){
        if($setAge<18){
            throw new Exception("Your Age is not quelyfied to our sysetm");

        }
        $this->age  =   $setAge;
    }

    public function getAge(){
        return $this->age*365;
    }
}

$person =   new Person();
$person->setAge(30);

var_dump($person->getAge());