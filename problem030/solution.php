<?php

require __dir__ . "/../src/helpers.php";

function sumOfFifthPowers($num)
{
    return array_reduce(str_split($num), function ($carry, $item) {
        $carry += $item ** 5;
        return $carry;
    }, 0);
}

for ($a = 2; $a <= 1000000; $a++) {
    if ($a == sumOfFifthPowers($a)) {
        $values[] = $a;
    }
}

solution(array_sum($values));