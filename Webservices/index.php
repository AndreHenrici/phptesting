<?php
    $server = new SoapServer(null, ["uri" => "http://www.arrabiata.de/PHP-SOAP/"]);

/**
 * @throws SoapFault
 */
function quadrat($a){
        if($a != null && trim($a) != ""){
            $quadrat = $a * $a;
            return $quadrat;
        } else {
            throw new SoapFault("Client", "Kein Parameter");
        }
    }

    $server->addFunction("quadrat");
    $server->handle();