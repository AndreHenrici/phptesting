<?php

    if (!empty($_GET['name']) && !empty($_GET['pw'])) {
        $name = $_GET['name'];
        $pw = $_GET['pw'];
        $file = fopen('C:\Apache24\htdocs\File\text.txt', "a");
        
        $crypt = md5($pw);
        
        fwrite($file, $name . "\t" . $crypt . "\n");
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