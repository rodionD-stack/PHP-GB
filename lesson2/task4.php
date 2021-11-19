<?php

function sum($a, $b) {
    return $a + $b;
}

function diff($a, $b) {
    return $a - $b;
}

function mul($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case "sum":
            return sum($arg1, $arg2);
        case "diff":
            return diff($arg1, $arg2);
        case "mul":
            return mul($arg1, $arg2);
        case "div":
            return div($arg1, $arg2);
    }
}

$result = mathOperation(5, 7, 'sum');
echo $result;

?>