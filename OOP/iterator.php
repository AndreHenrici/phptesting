<?php
  class LaufwerkeIterator implements Iterator {
    private $Ziel;
    private $Index;
    function __construct($Ziel) {
      $this->Ziel = $Ziel;
    }
    function current(): string {
      return $this->Ziel[$this->Index];
    }

    function next() : void{
      $this->Index++;
    }
    function rewind() :void {
      $this->Index = 0;
    }
    function key() : mixed{
      return $this->Index;
    }
    function valid() :bool {
      return $this->Index < count($this->Ziel); //maximale Menge
    }
  }
  class Computer implements IteratorAggregate {
    public $Laufwerke = array("A", "B", "C");
    function getIterator() : Traversable {
      return new LaufwerkeIterator($this->Laufwerke);
    }
  }

  $MeinComputer = new Computer();

  $i = $MeinComputer->getIterator();
  for ($i->rewind(); $i->valid(); $i->next()) {
    echo "Index: " . $i->key() . "<br />";
    echo "Wert: " . $i->current() . "<br />";
  } 
?>