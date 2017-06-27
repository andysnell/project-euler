<?php

require "../src/helpers.php";

for($x = 1, $sum = 0; $x < 1000; $x++){
	if($x % 3 == 0 || $x % 5 == 0) {
		$sum += $x;
	}
}
solution($sum);
