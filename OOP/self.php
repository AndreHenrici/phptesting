<?php
  class Computer {
		public static function klasse() {
			return __CLASS__;
		}
	
    public static function starten() {
      return self::klasse() . " ist gestartet."; 
    }
  }
  class Laptop extends Computer {
		public static function klasse() {
			return __CLASS__;
		}
  }
  echo Laptop::starten();
?>
