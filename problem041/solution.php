<?php
$start = microtime(true);
require __dir__ . "/../src/helpers.php";

ini_set('memory_limit', '512M');

function permute($items, $perms = [], &$return = [])
{
    if (!$items) {
        $return[] = (int)implode($perms);
    } else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
            $new_items = $items;
            $new_perms = $perms;
            list($foo) = array_splice($new_items, $i, 1);
            array_unshift($new_perms, $foo);
            permute($new_items, $new_perms, $return);
        }
        return $return;
    }
}


$solution = 0;

for ($n = 9; !$solution; $n--) {
    $permutations = permute(range(1, $n));
    rsort($permutations);
    foreach ($permutations as $p) {
        $max = $p / 2;
        $prime = true;
        for ($i = 2; $i <= $max; $i++) {
            if ($p % $i == 0) {
                $prime = false;
                break;
            }
        }
        if ($prime) {
            $solution = $p;
            break;
        }
    }
}


solution($solution);
duration($start);
