
<?php
include "./vehicles.php";
include "/var/www/html/funktionen.php";

$name =  isset($_GET["eingabe"]) ?  $_GET["eingabe"] : "";
$color = isset($_GET["button"]) ? $_GET["button"] : "";

$Autos = array();
$Autos[0] = new Car($name, $color);

?>

<html>

<head>
<link rel="stylesheet" href = "style.css">
<title>Vehicles</title>

</head>
<body>
    <form method="GET">
        <label>Wie heißt das Auto? </label>
        <br>
        <input name="eingabe" value = <?=$name?>></input>
        <br><label>Welche Farbe hat es?</label>
        <br>

        <button style = "background-color: silver" name = "button" value = "Silber"></button>
        <button style = "background-color: gold" name = "button" value = "Gold"></button>
        <button style = "background-color: #B08d57" name = "button" value = "Bronze"></button>

    </form>

    
</body>

<?php echo ($name != "" && $color != "")? "Das Auto hat die Farbe " . $Autos[0]->color . " und heißt " . $Autos[0]->name : "Eingabe Fehlerhaft";