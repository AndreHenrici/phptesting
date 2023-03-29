<h1>Ergebnis der POST-Anfrage</h1>
<pre>
<?php
  $socket = fsockopen(
    hostname: "tcp://php.net",
    port: 443,
    error_code: $fehlernr,
    error_message: $fehlermld,
    timeout: 30
  );
  $daten = "pattern=Streams&scope=quickref";
  fwrite($socket, "POST /search.php HTTP/1.1\r\n");
  fwrite($socket, "Host: www.php.net\r\n");
  fwrite($socket, "Accept: */*\r\n");
  fwrite($socket, "Content-length: " . strlen($daten) . "\r\n");
  fwrite($socket, "Content-type: application/x-www-form-urlencoded\r\n");
  fwrite($socket, "\r\n$daten\r\n\r\n");
  while (!feof($socket)) {
    echo htmlspecialchars(fgets($socket, 4096));
  }
  fclose($socket);


?>
</pre>
