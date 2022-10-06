<?php

function simplePair($numbers, $target)
{
    sort($numbers);
    $numbers = array_reverse($numbers);
    $r = null;
    foreach ($numbers as $number) {
        $a = $target / $number;
        $index = array_search($a, $numbers);
        if ($index) {
            $r = [$numbers[$index], $number];
            break;
        }
    }
    var_dump($r);
    return $r;
}


simplePair([1, 2, 3], 3);// ➞ [1, 3]

simplePair([1, 2, 3], 6);// ➞ [2, 3]

simplePair([1, 2, 3], 9);// ➞ null
