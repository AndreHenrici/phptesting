
<?php
// Erstellen einer anonymen Klasse
$my_class = new class() {
  // Eine Methode, die "Hallo Welt!" ausgibt
    public function sayHello() {
        echo "Hallo Welt!";
    }

};

// Aufrufen der Methode der anonymen Klasse
$my_class->sayHello();
