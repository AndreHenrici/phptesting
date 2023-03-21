<html>
    <form method="GET">
        Datenbank:  <input type="text" name="database" value=<?=isset($_GET["database"])?$_GET["database"]:""?>> <br>
        Tabelle:    <input type="text" name="table" value=<?=isset($_GET["table"])?$_GET["table"]:""?>> <br>
        Spalte: (* für alle):  <input type="text" name="column" value=<?=isset($_GET["column"])?$_GET["column"]:"*"?>>
        <input type="submit" value="enter"/>

<?php

include "../funktionen.php";


$database = isset($_GET["database"])?$_GET["database"]:"";
$col = isset($_GET["column"])?$_GET["column"]:"*";
$table = isset($_GET["table"])?$_GET["table"]:"";

$databaseExists = pg_connect("host=localhost dbname=$database user=postgres password=postgres", 0);




if ($databaseExists){
    
    $results = pg_query($databaseExists, "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'");
    $results = pg_fetch_all($results);

    $tableExists = false;
    
    for($i=0; $i<count($results); $i++) {
        if($table == $results[$i]["table_name"]) $tableExists = true;
    }

    if ($tableExists && $databaseExists && !empty($database) && !empty($table)){
        try{
            $db = new PDO("pgsql:dbname=$database; host=localhost",
            "postgres",
            "postgres");
        } catch (PDOException $e){
            echo 'Fehler: ' . htmlspecialchars($e->getMessage());
            exit();
        } 

        
        $sql = "
        SELECT $col
        FROM $table 
        ";

        $kommando = $db->prepare($sql);
        $kommando->execute();
        $output = $kommando->fetchAll(PDO::FETCH_OBJ);
        pre($output);
    } else echo "<br>" . (!empty($table)? "Tabelle gibt es nicht": "Gib einen Tabellennamen ein");

} else echo "<br>" . (!empty($database)? "Datenbank gibt es nicht": "Gib einen Datenbanknamen ein");



/*
$sql = "CREATE TABLE tabelle (
    id INTEGER,
    feld VARCHAR (1000)
    );";


$db->exec($sql);



$sql = "";

$sql .= "DELETE tabelle;";

$db->exec($sql);


echo $database;
*/


?>
