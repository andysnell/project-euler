<?php

require __dir__ . "/../src/helpers.php";

for($n = 1; $n <= 100; $n++) {
    for($r = 1; $r <= $n; $r++) {
        for ($c = 1, $i = 1; $i <= $r; $i++) {
            $c *= ($n + 1 - $i) / $i;
        }
        if ($c > 1000000) {
            $solutions[] = $c;
        }
    }
}

solution(count($solutions));
