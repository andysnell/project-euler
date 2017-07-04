<?php

require __dir__ . "/../src/helpers.php";

class Primes
{
    public $primes = [2 => 2, 3 => 3, 5 => 5, 7 => 7];
    public $max = 7;

    public function isPrime($num)
    {
        if (isset($this->primes[$num])) {
            return true;
        }
        $root = sqrt($num);
        for ($i = 2; $i <= $root; $i++) {
            if (!($num % $i)) {
                return false;
            }
        }
        $this->primes[$num] = $num;
        return true;
    }

    public function next()
    {
        while (!($this->isPrime($this->max += 2))) {
            continue;
        }
        return $this->max;
    }

    public function truncatableLeft($num)
    {
        for ($i = strlen($num) - 1; $i; $i--) {
            if (!isset($this->primes[substr($num, 0, $i)])) {
                return false;
            }
        }
        return true;
    }

    public function truncatableRight($num)
    {
        for ($i = -1; $i >= -(strlen($num) - 1); $i--) {
            if (!isset($this->primes[substr($num, $i)])) {
                return false;
            }
        }
        return true;
    }
}

$primes = new Primes();
$solutions = [];
while (count($solutions) < 11) {
    $test = $primes->next();
    if ($primes->truncatableLeft($test) && $primes->truncatableRight($test)) {
        $solutions[] = $test;
    }
}

solution(array_sum($solutions));
