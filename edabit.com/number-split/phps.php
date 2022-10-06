<?php

function numberSplit($number) {
    $half = intval($number / 2);
    $odd = $number % 2;
    if ($half > 0) {
        $r = [$half, $odd == 0 ? $half : $half + $odd];
    } else {
        $r = [$odd == 0 ? $half : $half + $odd, $half];
    }

    var_dump($r);
    return $r;
}

numberSplit(4);// ➞ [2, 2]

numberSplit(10);// ➞ [5, 5]

numberSplit(11);// ➞ [5, 6]

numberSplit(-9);// ➞ [-5, -4]
