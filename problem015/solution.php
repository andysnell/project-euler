<?php

require __dir__ . "/../src/helpers.php";

/*
 * The number of lattice paths from (0,0)} to (n,k) is equal to the binomial
 * coefficient (n + k choose k). We can use the multiplicative formula to
 * calculate the coefficient.
 */

$n = 20;
$k = 20;

for ($paths = 1, $i = 1; $i <= $k; $i++) {
    $paths *= (($n + $k) + 1 - $i) / $i;
}

solution($paths);