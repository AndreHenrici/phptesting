<?php
    $client = new SoapClient(null, ['location' => "http://localhost/Webservices/index.php",
        'uri' => "http://arrabiata.de/PHP-SOAP/"]);

    try{
        $a = 31;
        $antwort = $client->__soapCall("quadrat", [$a]);
        print"Das Quadrat von $a ist: " . $antwort;
    } catch (SoapFault $ex){
        print "Fehler-Code: " . $ex->faultcode . "<br/> ";
        print "Fehler-String: " . $ex->faultstring;
    }