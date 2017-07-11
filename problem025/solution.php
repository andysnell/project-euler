<?php

require __dir__ . "/../src/helpers.php";

$index = 2;
$current = 1;
$previous = 1;

while (strlen($current) < 1000) {
    $index++;
    $next = bcadd($current, $previous);
    $previous = $current;
    $current = $next;
}

solution($index);