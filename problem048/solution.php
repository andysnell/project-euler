<?php
require __dir__ . "/../src/helpers.php";
$start = microtime(true);

for($sum = 0, $x = 1; $x <= 1000; $x++) {
    $sum = bcadd($sum, bcpow($x, $x));
}

solution(substr($sum, -10));
duration($start);

