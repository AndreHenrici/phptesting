<?php

    if (!empty($_GET['name']) && !empty($_GET['pw'])) {
        $name = $_GET['name'];
        $pw = $_GET['pw'];
        $path = 'C:\Apache24\htdocs\File\text.txt';

        $file = is_readable($path)?fopen($path, "a"): "nö";
        
        $crypt = md5($pw);
        
        fwrite($file, $name . "\t" . $crypt . "\n");

        //die(is_dir('C:\Apache24\htdocs\OOP')?"ja":"nein");

        fclose($file);

        header("Location: abfrage.php");
        exit;
        
    } 
?>
<form method="GET">
    <label>Geben sie ihren Namens an:</label><br>
    <input type="text" name="name"><br><br>

    <label>Passwort: </label><br>
    <input type="password" name="pw"><br><br>

    <input type="submit" name="submit" value="Speichern">
</form>

<?php
    echo "kein Name oder kein Passwort eingegeben";