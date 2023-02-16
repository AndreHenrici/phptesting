<?php
class Reise {

public $persons = array("Hans", "Dieter");
public $destination = "London";

function __construct(array $persons, String $destination)
{
  $this->persons = $persons;
  $this->destination = $destination;
  $this->peopleCount = count($persons);
}

public function getDestination() 
{
  return $this->destination;
}

function getPeopleCount()
{
  return count($this->persons);
  
}

function getPersons()
{
  return $this->persons;
}

function klasse(){
  return __CLASS__;
}

}

?>