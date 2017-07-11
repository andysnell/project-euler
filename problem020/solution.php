<?php

require __dir__ . "/../src/helpers.php";

function bc_factorial(int $x) {
    for($y = 1; $x > 1; $x--) {
        $y = bcmul($x, $y);
    }
    return $y;
}

solution(array_sum(str_split(bc_factorial(100))));