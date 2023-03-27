<?php
//CSV-Datei bearbeiten und in Datenbank integrieren
include "../funktionen.php";

$datei = fopen("csv_k.CSV", "r");
$username = "andre";
$tableName = "csv2";

$filepath = 'pw.txt';
$file = fopen($filepath, "r");

$content = fread($file, filesize($filepath));
$content = str_replace(array("\r", "\n", "\t"), ' ', $content);

$arr = explode(' ', $content);
$arr = array_filter($arr);
$arr = array_values($arr);

fclose($file);

$pw[$arr[0]] = $arr[1];
//JOjohohohohoho

if ($db = mysqli_connect("localhost", "andre", "pw123", "dvirtub")){
    echo "Verbindungsaufbau erfolgreich <br>";

    $headers = fgetcsv($datei);
    $emptySet = array();

    foreach ($headers as $header) {
        $emptySet[$header] = 0;
    }

    $i = 0;
    while(!empty($row = fgetcsv($datei))) {
        $resultSetRows["row$i"] = array_combine($headers, $row);
        $i++;
    }
    
    //die(pre($resultSetRows));

    // CREATE TABLE
    $sql = "CREATE TABLE $tableName (";
    foreach ($headers as $head) {
        $var = isDateOrTime($resultSetRows["row0"][$head]);
        $sql .= $head  . " " . $var . ", ";
    }
    $sql = substr($sql, 0, strlen($sql)-2);
    $sql .= ");";


    if (mysqli_query($db, $sql)){
        echo "Tabelle angelegt <br/>";
    } else echo "Fehler";

    //CREATE ROWS
    $sqlFields = "";
    foreach($headers as $head){
        $sqlFields .= "$head, ";
    }
    $sqlFields = substr($sqlFields, 0, strlen($sqlFields) - 2);

    foreach($resultSetRows as $row){
        $sql = "INSERT INTO $tableName (";
        $i = 0;

        $sql .= $sqlFields;

        $sql .= ") VALUES (";

        $i = 0;
        foreach($row as $values){
            if(isDateOrTime($values)=="DATE") $values = convertDate($values); 
            $sql .= "'$values'";
            $i++;
            if($i != count($row)) $sql .= ", ";
        }
        $sql .= ")";

        if (mysqli_query($db, $sql)){
            echo "Daten eingefügt <br/>";
        } else echo "Fehler";

    }

    

    fclose($datei);
    mysqli_close($db);
}

function convertDate($date){

    $regex = "/^(0?[1-9]|[1-2][0-9]|3[0-1])\.(0?[1-9]|1[0-2])\.([0-9]{4})$/";

    if(preg_match($regex, $date)) {
        $tmp = explode(".", $date);
        return "$tmp[2]-$tmp[1]-$tmp[0]";
    }

    else return $date;
}

function isDateOrTime($string){
    $regex = "/^(0?[1-9]|[1-2][0-9]|3[0-1])\.(0?[1-9]|1[0-2])\.([0-9]{4})$/";
    if(preg_match($regex, $string)) return "DATE";

    $regex = '/^(?:[01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/';
    if(preg_match($regex, $string)) return "TIME";

    else return "VARCHAR(255)";
}
