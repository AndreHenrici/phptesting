<?php

  trait Converter { 
  	private function mb2gb($mb) {
  		$gb = $mb / 1024;
		return $gb;
  	}
  }
  class Computer {
  	use Converter;
	
    public $RAM = "1024";
	
    public function ramcheck() {
      $gb = $this->mb2gb($this->RAM);
      echo "<br>" . __METHOD__ . "<br>";
      return "Computer hat " . $gb . ' GB RAM'; 
    }
  }
  class Laptop extends Computer {
    public $RAM = "5120";
  }
  $MeinLaptop = new Laptop();
  echo $MeinLaptop->ramcheck();

  function wow(){
    echo __METHOD__;
  }

?>