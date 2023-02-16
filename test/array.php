<?php
include './funktionen.php';

$json = json_decode(file_get_contents('https://netbox.maschinenbau-kitz.de/api/dcim/racks/?format=json'));
$vlan = (array) json_decode(file_get_contents('https://netbox.maschinenbau-kitz.de/api/ipam/vlans/'));

$rackNames = array();

for($i=0; $i<$json->count; $i++) $rackNames[$i] = $json->results[$i]->display;

$date = date("d.m.Y", 9223372036854775807);

$i = 0;
$vlan2 = $vlan['results'];

foreach($vlan['results'] as $key => $value) {
    unset($vlan2[$key]);
    $vlan2["VT $i"] = $value;
    $i++;
}

//Sébastien lösung zum Ersetzen von Keys
$orginalArray = array(7 => 'Griessmann', 10 => 'Dembele', 11 => 'Giroud');
$keysNeu = array(2, 3, 4);
$valuesOld = array_values($orginalArray);
$result = array_combine($keysNeu, $valuesOld);

pre($vlan2);



?>
