<?php
$start = microtime(true);
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


// Note: using the series values as array keys and using isset() to check for 
// the key existance is significantly (~10X) faster than adding the value to 
// the array and using in_array() to search for the value.  The isset() 
// function is a hash lookup and O(1), while in_array() is O(n)
while($solutions < 3){
	$t = getNextTriangularNumber();
	$pentagonals[getNextPentagonalNumber()] = 1;
	$hexagonals[getNextHexagonalNumber()] = 1;
	if(isset($pentagonals[$t]) && isset($hexagonals[$t]) ) {
		$solutions++;
	}
}

solution($t);
duration($start);
