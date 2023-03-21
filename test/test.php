<?php 
test
$ar = array("A" => 1, "B" => 2, "C" => 3, "D" => 4, "E" => 5);
$ar2 = array("K" => 6, "L" => 7, "M" => 8, "N" => 9, "O" => 10);

$kurse =[
    ["IBW", 32],
    ["Miemens", 34],
    ["Rheinwerk", 340]
];

pre($kurse);

function differenz($a, $b){
    return $a - $b;
}

function summe(int|string|float ...$a): int|float {
    return array_sum($a);
}

function summe_int(int ...$a): int 
{
    return array_sum($a);
}

function summe_float(float ...$a): float {
    return array_sum($a);
}



function gen($a = 3){
    yield $a;
}

function pre($arr)
{
    echo ("<br>mit pre aufgerufen: <pre>" . print_r($arr, true) . "</pre>");
}

function fakultaet() 
{   
    static $i = 3;
    if ($i > 0) {
        echo $i . "<br>";
        return $i-- * fakultaet();
    } else {
        return 1;
    }
}
?>