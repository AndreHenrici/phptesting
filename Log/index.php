<?php

    include("../funktionen.php");

    $d = dir("./ordner");
    while (($eintrag = $d->read()) !== false){
        echo htmlspecialchars($eintrag) . "<br />";
    }

    echo __DIR__;

    $d->close();