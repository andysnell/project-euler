<?php
$start = microtime(true);
require __dir__ . "/../src/helpers.php";

function divisors($num) : array
{
	for($divs = [1], $x = 2; 2 * $x <= $num; $x++) {
		if ($num % $x == 0) {
			$divs[] = $x;
		}
	}
	return $divs;
}

function isAbundant($num) : bool 
{
	return array_sum(divisors($num)) > $num;
}

// Find the Abundant Numbers Below Threshold
for ($i = 1; $i < 28123; $i++) {
	if(isAbundant($i)) {
		$abundants[] = $i;
	}
}

// Find Abundant Sums
foreach ($abundants as $a) {
	foreach ($abundants as $b) {
		$sums[$a + $b] = true;
	}
}

// Find Total of Non-abundant sums
for($j = 1; $j <= 28123; $j++) {
	if(!isset($sums[$j])) {
		$total[] = $j;
	}
}

solution(array_sum($total));
echo "Duration: ", microtime(true) - $start, PHP_EOL;

