<?php

function pre($arr)
{
    echo ("<br>mit pre aufgerufen: <pre>" . print_r($arr, true) . "</pre>");
}

function explode_multi(array $trennzeichen, string $string){
    //Verstehe ich das richtig, dass hier alle Trennzeichen die in dem Array übergeben werdeb vom ersten array trennzeichen[0] ersetzt werden? 
    $string = str_replace($trennzeichen, $trennzeichen[0], $string);
    $ergebnis = explode($trennzeichen[0], $string);

    //Wieder eine Call-Back Funktion. Was für ein Parameter wird hier übergeben? filtern($wert) benötigt einen Parameter $wert 
    //$ergebnis = array_filter($ergebnis, "filtern");

    $filter_x = $ergebnis;

    foreach($ergebnis as $key => $value){
        if(!filtern($value)) unset($ergebnis[$key]); 
    }

    return array_values($ergebnis);

}

function filtern($wert){
    if($wert == ""){
        return false;
    } else {
        return true;
    }
}

function schreischutz($string) {
    $worte = str_word_count($string, 1);
    $gross = 0;
    $klein = 0;
    foreach($worte as $wort) {
      for ($i = 1; $i < strlen($wort); $i++) {
        $ascii = ord(substr($wort, $i, 1));
        if ($ascii >= 65 && $ascii <= 90) {
          $gross++;
        } elseif ($ascii >= 97 && $ascii <= 122) {
          $klein++;
        }
      }
    }
    if ($gross > $klein) {
      return ucwords(strtolower($string));
    } else {
      return $string;
    }  
}

function add(){
  $zahlen = func_get_args();
  $summe = 0; 
  foreach($zahlen as $zahl){
    $summe += $zahl;
  }
  return $summe;
}

function multiplay(){
  $zahlen = func_get_args();
  $summe = 0;
  foreach($zahlen as $zahl){
    $summe *= $zahl;
  }
  return $summe;
}