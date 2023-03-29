<html>
<head>
    <title>G&auml;stebuch</title>
</head>
<body>
<h1>Gästebuch</h1>

<?php
    include "../funktionen.php";
    if (isset($_POST["Name"]) &&
        isset($_POST["Email"]) &&
        isset($_POST["Ueberschrift"]) &&
        isset($_POST["Kommentar"])) {
        $daten = ["ueberschrift" => $_POST["Ueberschrift"],
            "eintrag" => $_POST["Kommentar"],
            "autor" => $_POST["Name"],
            "email" => $_POST["Email"],
            "datum" => date("d.m.Y, H:i")];
        $daten = base64_encode(serialize($daten));
        if(!file_exists("gaestebuch.txt")){
            $datei = fopen("gaestebuch.txt", "xb");
            fclose($datei);
        }

        $altdaten = file_get_contents("gaestebuch.txt");
        if (file_put_contents("gaestebuch.txt", "$daten\r\n$altdaten")){
            echo "Eintrag hinzugefügt";
        } else echo "Fehler";
    }

?>

<form method="post" action="">
    Name <input type="text" name ="Name" /><br/>
    Email <input type ="text" name="Email"/><br/>
    Überschrift <input type="text" name="Ueberschrift" /><br/>
    Kommentar <textarea cols="70" rows="10" name="Kommentar"></textarea><br/>
    <input type="submit" name = "Submit" value="Eintragen"/>

</form>

</body>
</html>

