<?php

require __dir__ . "/../src/helpers.php";

$triangles = [];

for($a = 1; $a < 1000; $a++) {
	for($b = 1; $b < 1000; $b++) {
		$c = sqrt($a ** 2 + $b ** 2);
		if(ctype_digit((string)$c)) {
			$p = $a + $b + $c;
			$key = [$a, $b, $c];
			sort($key);
			if ($p <= 1000) {
				$triangles[implode(',', $key)] = (int) $p;
			}
		}
	}
}

$result = array_count_values($triangles);
solution(array_search(max($result), $result));

