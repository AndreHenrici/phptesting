<?php
    require_once "../lib/nusoap.php";

    $a = 36;

    $client = new nusoap_client("http://localhost/Webservices");
    $antwort = $client->call("quadrat",[$a]);

    if ($fehler = $client->getError()){
        print "Fehler: " . $fehler;
    } elseif ($fehler = $client->fault){
        print "SOAP-Fehler: " . $fehler;
    } else {
        print "Das Quadrat von $a ist " . $antwort;
    }

    ?>
