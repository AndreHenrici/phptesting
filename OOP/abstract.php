<?php

// Eine abstrakte Klasse
abstract class Shape {
  // Eine abstrakte Methode, die von Unterklassen implementiert werden muss
  abstract public function getArea();
}

// Eine Klasse, die von der abstrakten Klasse Shape erbt
class Circle extends Shape {
  public $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  // Implementierung der abstrakten Methode aus der Klasse Shape
  public function getArea() {
    return pi() * $this->radius * $this->radius;
  }
}

// Ein Interface
interface Shape {
  // Eine abstrakte Methode, die von Klassen implementiert werden muss, die das Interface implementieren
  public function getArea();
}

// Eine Klasse, die das Interface Shape implementiert
class Circle implements Shape {
  public $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  // Implementierung der abstrakten Methode aus dem Interface Shape
  public function getArea() {
    return pi() * $this->radius * $this->radius;
  }
}

