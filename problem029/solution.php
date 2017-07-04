<?php

require __dir__ . "/../src/helpers.php";

for ($a = 2; $a <= 100; $a++) {
    for ($b = 2; $b <= 100; $b++) {
        $distinct[bcpow($a, $b)] = 1;
    }
}
solution(count($distinct));