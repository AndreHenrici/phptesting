<?php
    require_once "../lib/nusoap.php";

    $server = new nusoap_server();
    $server->register("quadrat");

    function quadrat($a){
        if($a != null && trim($a) != ""){
            $quadrat = $a * $a;
            return $quadrat;
        } else {
            return new soap_fault("Client", "", "Kein Parameter");
        }
    }
    $daten = file_get_contents("php://input") ?? "";
    $server->service($daten);