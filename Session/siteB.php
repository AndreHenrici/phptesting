<?php

include "../funktionen.php";

session_start();


echo "site";



//pre($_SERVER);
pre($_COOKIE);
pre($_SESSION);

echo "<br>" . session_name();
echo "<br>" . session_id();
echo "<br>" . urlencode("info-de");

?>

<br><a href="http://vm.andre.test/Session/siteA.php">Zur Beispielseite</a>