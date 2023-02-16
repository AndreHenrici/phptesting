
<html>
    <head>
        <title>Reguläre Ausdrücke</title>
    </head>
    <body>
        <form method = "GET">
            <input type = "text" name = "eingabe" value = <?= !empty($_GET) ? $_GET["eingabe"] : ""; ?> >
        </form> 
    </body>
</html>

<?php
include "./funktionen.php";

$eingabe = $_GET["eingabe"];
$datum = "02.03.2022";
$regDatum = "/^(0?[1-9]|[12]\d|3[01]).(0?[1-9]|1[0-2]).((19|20)?\d{2})$/";

echo preg_match($regDatum, $eingabe, $matches);

if($matches[3]==2 && $matches[2] > 28)

$reg = "/^[a-z]{5}[0-9]{3}[A-Z]$/";

if (preg_match($reg, $eingabe)) {
    echo "The string matches the pattern.";
} else {
    echo "The string does not match the pattern.";
}

if (preg_match($reg, $datum, $teile, PREG_OFFSET_CAPTURE, 5)) {
    pre($teile);
}

$regs = array ($reg, $regDatum, "hallo", 2312, "fsdfs31231");

pre($regs);

for($i = 0; $i < count($regs); $i++){
    if (preg_match($regs[$i], $eingabe)) echo "<br>Regulärer Ausdruck: " . $regs[$i];
}

function checkRegEx($eingabe, array $reg){
    
}

?>
