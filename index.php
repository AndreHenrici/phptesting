<?php

include "./funktionen.php";

$x = date("U");

for ($i=0; $i<2000; $i++){
  echo $i;
}

$x = date("U") - $x;

echo "<br><br><br>" . $x;