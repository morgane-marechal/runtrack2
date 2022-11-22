<?php

function calcule($a, $operation, $b){
    switch($operation){
        case "+":
            $compute = $a + $b;
            break;
        case "-":
            $compute = $a - $b;
            break;
        case "*":
            $compute = $a * $b;
            break;
        case "/":
            $compute = $a / $b;
            break;
        case "%":
            $compute = $a % $b;
            break;
        }

    return $compute;

    }

    // ----test-----
    $a = 50;
    $b = 12;
    $operation = "-";

    $calcul1 = calcule($a, $operation, $b);
    echo $calcul1;
    echo "\n";
    $calcul2 = calcule(17, "/",2);
    echo $calcul2;

?>