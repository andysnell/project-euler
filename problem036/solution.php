<?php
$start = microtime(true);
require __dir__ . "/../src/helpers.php";

$sum = 0;

function palindrome2(int $x): bool
{
    $x = base_convert($x, 10, 2);
    return $x == strrev($x);
}

function palindrome10(int $x): bool
{
    return $x == strrev($x);

}


for ($i = 1; $i < 1000000; $i++) {
    if (palindrome10($i) && palindrome2($i)) {
        $sum += $i;
    }
}

solution($sum);
duration($start);
