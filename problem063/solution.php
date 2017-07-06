<?php
$start = microtime(true);
require __dir__ . "/../src/helpers.php";

$count = 0;
for ($a = 1; $a <= 100; $a++) {
    for ($b = 1; $b <= 100; $b++) {
        if (strlen(bcpow($a, $b)) == $b) {
            $count += 1;
        }
    }
}
solution($count);
duration($start);