<?php
    include ('../funktionen.php');

if($db = mysqli_connect("localhost", "andre", "andre", "mydatabase")){
    echo "Verbindungsaufbau erfolgreich <br>";
    
    $sql = "
    SELECT name
    FROM tabelle
    WHERE id = 2;
    ";

    $ergebnis = mysqli_query($db, $sql);
    $name = (mysqli_fetch_assoc($ergebnis))["name"];
    echo "<br>". $name;
/*
    if($ergebnis = mysqli_query($db, $sql)){
        echo "<ul>";
        while ($zeile = mysqli_fetch_assoc($ergebnis)){
            echo "<li>" . htmlspecialchars($zeile["id"]) . 
            ":" . htmlspecialchars($zeile["name"]) . "</li>";
        }
        echo "</ul>";
    }
*/
    mysqli_close($db);
} else {
    echo "Fehler";
}

