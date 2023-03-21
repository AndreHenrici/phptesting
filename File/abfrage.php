<?php

include '../funktionen.php';


    if(isset($_POST['new'])) {
        header("Location: index.php");
        exit;
    }

    $filepath = 'C:\Apache24\htdocs\File\text.txt';
    $file = fopen($filepath, "r");
    $content = fread($file, filesize($filepath));

    $content = str_replace(array("\r", "\n", "\t"), ' ', $content);
    $arr = explode(' ', $content);
    $arr = array_filter($arr);
    $arr = array_values($arr);

    //rename('C:\Apache24\htdocs\File\ordner_1', 'C:\Apache24\htdocs\File\ordner_2');
    

    fclose($file);

    for($i = 0; $i < count($arr); $i+=2){
        $resultSet[$arr[$i]] = $arr[$i+1];
    }
    //pre($resultSet);
    
?>

<html>
    <form method = "POST">
        <p>Gib deinen Namen ein: <p><br>
        <input type="text" name="namex" value=<?=isset($_POST['namex'])?$_POST['namex']:''?>>

        <p>Gib dein Passwort ein: <p><br>
        <input type="password" name="pwx" value=<?=isset($_POST['pwx'])?$_POST['pwx']:''?>>
        <input type="submit">

        <input type="submit" name="new" value ="Neu hier?">
    </form>


<?php  


    $name = isset($_POST['namex'])?$_POST['namex']:'';
    $pw = isset($_POST['pwx'])?$_POST['pwx']:'';
    
    if(!empty($pw) && !empty($name)){
        if(array_key_exists($name, $resultSet)){
            if($resultSet[$name] == md5($pw)){
                echo "eingabe erfolgreich";
            } else echo "falsches Passwort";

        } else echo "Name gibt es nicht";
    } else echo "Gib deine Daten ein";
