<?php

class Person{
    public $first = 'Info';
    private $last = 'Nielsen';
    private $age = '28';
    
}
class Pet extends Person{
    public function owner(){
        $a =$this->first;
        return $a;
    }
}

// $object = new newClass;
// var_dump($object);