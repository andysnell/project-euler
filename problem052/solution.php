<?php

require __dir__ . "/../src/helpers.php";

function f($num)
{
    $arr = str_split($num);
    sort($arr);
    return $arr;
}

$solved = false;
$i = 0;
while (!$solved) {
    $i += 1;
    $test = f($i);
    if ($test == f(2 * $i) &&
        $test == f(3 * $i) &&
        $test == f(4 * $i) &&
        $test == f(5 * $i) &&
        $test == f(6 * $i)
    ) {
        $solved = true;
    }
}

solution($i);
