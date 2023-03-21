
<?php
include '../OOP/Person.php';
include '../OOP/Reise.php';
include '../funktionen.php';

$destination = (array_key_exists("destination", $_GET) ? $_GET["destination"] : "");
$peopleCount = (array_key_exists("peoplecount", $_GET) ? $_GET["peoplecount"] : "");
$coo = "Cookie";
$test = "test";

$arr = array (1,2,3,4);

?>


<!DOCTYPE html>


<head>
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.1109/styles/kendo.default-main.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2022.3.1109/styles/kendo.default-ocean-blue.min.css">

<script src="https://kendo.cdn.telerik.com/2022.3.1109/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2022.3.1109/js/jszip.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2022.3.1109/js/kendo.all.min.js"></script>

<title>André testet</title>
</head>

<html>

<link rel="stylesheet" href = "index.css">

<body>



<h1>Andre testet</h1>

<form method = "GET">

<?php 
$names = array();
$persons = array();

for ($i=1; $i<=$peopleCount; $i++){
  $key = "p$i";
  $names[$key] = (array_key_exists($key, $_GET) ? $_GET[$key] : "");
}
?>


<p>Wohin soll die Reise gehen?</p>
<input type="string" name="destination" value = <?= $destination ?> >

<p>Wie viele Personen?</p>
<input type="integer" name="peoplecount" value = <?= $peopleCount ?> >

<button type="submit">Enter</button>



<script src="./test.js"></script>

<?php
  $i = 1;
  foreach ($names as $var => $value):
    ?>
    <p>Person <?= $i;?> Name:</p>
    <input type="string" name= <?=$var?> value = <?=$value?> >
    <?php

  $i++;
  endforeach;


?>

  
</body>

</form>



</html> 
