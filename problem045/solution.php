<?php

require __dir__ . "/../src/helpers.php";

function getNextTriangularNumber()
{
	static $n = 0;
	$n++;
	return ($n * ($n + 1)) / 2;
}

function getNextPentagonalNumber()
{
	static $n = 0;
	$n++;
	return ($n * (3 * $n - 1)) / 2;
}

function getNextHexagonalNumber()
{
	static $n = 0;
	$n++;
	return $n * (2 * $n - 1);
}

$solutions = 0;
$pentagonals = [];
$hexagonals = [];

while($solutions < 3){
	$t = getNextTriangularNumber();
	$pentagonals[] = getNextPentagonalNumber();
	$hexagonals[] = getNextHexagonalNumber();

	if(in_array($t, $pentagonals) && in_array($t, $hexagonals)) {
		$solutions++;
	}
}

solution($t);