<?php
$start = microtime(true);
require __dir__ . "/../src/helpers.php";


function permute($items, $perms = [], &$return = [])
{
    if (!$items) {
        $return[(int)implode($perms)] = 1;
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

function concat(int $i)
{
    $cat = ($i * 1) . ($i * 2);
    for ($k = 3; strlen($cat) < 9; $k++) {
        $cat .= $i * $k;
    }
    return $cat;
}

$x = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$p = permute($x);

for ($i = 9; $i < 10000; $i++) {
    $t = concat($i);
    if (isset($p[$t])) {
        $solutions[] = $t;
    }
}

solution(max($solutions));
duration($start);
