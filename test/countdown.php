<html>
    <head>
        <title>Final Countdown </title>
    </head>
    <body>
        <form method = "GET">
            <input type = "text" name = "eingabe" />
            <input type = "submit" name = "verschicken" value="Wie lange noch?" />
        </form>
    </body>
</html>
<?php

if(isset($_GET["verschicken"])){
    $datum1 = strtotime($_GET["eingabe"]);
    $datum2 = time();
    $ergebnis = $datum1 - $datum2;

    if($ergebnis > 0){
        $tage = str_split(floor($ergebnis / (60 * 60 * 24)));
        echo "Noch ";
        for($i = 0; $i < count($tage); $i++){
            echo "<img src='./zahlen/" . $tage[$i] . ".png' />" ;
        }
        echo "tage bis zum " . date('d.m.Y', $datum1);
    } else {
        echo "Ihr datum liegt nicht in der Zukunft";
    }
}

?>