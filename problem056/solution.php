<?php
$start = microtime(true);
require __dir__ . "/../src/helpers.php";

$max = 0;
for ($a = 1; $a <= 100; $a++) {
    for ($b = 1; $b <= 100; $b++) {
        $sum = array_sum(str_split(bcpow($a, $b)));
        if ($sum > $max) {
            $max = $sum;
        }
    }
}
solution($max);
duration($start);
