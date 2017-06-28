<?php

function solution($value)
{
	echo "Solution: " . $value . PHP_EOL;
	return true;
}

function duration($start_time)
{
	echo "Duration: ", number_format(microtime(true) - $start_time, 4), PHP_EOL;
}