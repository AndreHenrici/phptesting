<?php
    include "../funktionen.php";
    $datei = fopen("data.txt", "a+");
    fwrite($datei, "alba\t\n");
    fclose($datei);

    $datei = fopen("data.txt", "a+");
    $st = fread($datei, filesize("data.txt"));
    echo $st;

    fclose($datei);