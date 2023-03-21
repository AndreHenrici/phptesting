<?php

class Calculator {

  public function __get($eigenschaft){
    if ($eigenschaft == "Auto"){
        echo "Hello world";
        echo __METHOD__;
    }
  }
}

$calc = new Calculator();
//echo $calc->add(1, 2, 3); // Ausgabe: 6
echo "<br>";
//echo $calc->subtract(1, 2, 3); // Ausgabe: Error: Call to undefined method Calculator::subtract()
$calc->Auto;