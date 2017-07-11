<?php

require __dir__ . "/../src/helpers.php";

$start = microtime(true);

function coprime10($x)
{
    return $x % 2 && $x % 5;
}

function mOrder(int $test)
{
    for ($i = 1; $i <= 1000; $i++) {
        if (bcmod(bcpow(10, $i), $test) == 1) {
            return $i;
        }
    }
}

$solution = 0;
$max = 0;

for ($x = 2; $x < 1000; $x++) {
    if (coprime10($x)) {
        $m = mOrder($x);
        if ($m > $max) {
            $solution = $x;
            $max = $m;
        }
    }
}

solution($solution);
duration($start);

