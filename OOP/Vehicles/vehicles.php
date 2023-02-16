<?php

abstract Class Vehicles{

    public function startEngine(){

    }
    public function stopEngine(){

    }


}
 
Class Car extends Vehicles{
    function __construct($name ,$color){
        $this->name = $name;
        $this->color = $color;
    }
    public function startEngine()
    {

    }
    function stopEngine()
    {

    }
}

Class Motorcycle extends Vehicles{
    function startEngine()
    {

    }
    function stopEngine()
    {

    }
}