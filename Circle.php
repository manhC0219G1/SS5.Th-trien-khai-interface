<?php
class Circle{
    public $radius;
    public $name;
    public function __construct($name,$radius)
    {
        $this->radius=$radius;
        $this->name=$name;
    }
    public function getRadius(){
        return $this->radius;
    }
}