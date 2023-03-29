<?php
    $datei = fopen("data.txt", "a+");
    fwrite($datei, "alba\t\n");
    fclose($datei);

    chmod("data.txt", 0775);
    //exec("rm data.txt");