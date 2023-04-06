<?php
    function quadrat($a){
        if ($a != null && trim($a) != ""){
            $quadrat = $a * $a;
            return $quadrat;
        }
    }

if (isset($_GET['methode']) && isset($_GET['parameter'])){
        $methode = $_GET['methode'];
        $parameter = json_decode($_GET['parameter']);
        if (function_exists($methode)){
            $ergebnis = array($methode($parameter[0]));
            echo json_encode($ergebnis);
        }
    }

