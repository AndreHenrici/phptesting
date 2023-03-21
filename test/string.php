<!DOCTYPE html>
<?php

include "./funktionen.php";
include "./json.php";

$string = (array_key_exists("input", $_GET) ? $_GET["input"] : "");
//$string_1 = (array_key_exists("input", $_GET) ? $_GET["input"] : "");
$zahl = (array_key_exists("zahl1", $_GET) ? $_GET["zahl1"] : "");

//$string = "Hallo wir haben hier, 'hier' einen String ()'*'";

?>
<html>
<form>
    <p> String eingeben: </p>
    <input name = "input" value = <?= $string?>>
    <br>
    <?=$string?>

    <p> Zahl eingeben: </p>
    <input name = "zahl1" value = <?= $zahl ?>>

    <button type = "submit" > Button </button> 

    <?="<br>"?>
    <?="<br>"?>

    <?="<br>"?>

<?php
$json = json_decode($json);

echo $json->results[$zahl]->location->name . "<br>";

pre($json);