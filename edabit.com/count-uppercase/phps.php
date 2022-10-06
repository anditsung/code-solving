<?php

//function countUppercase($arr) {
//    $sum = 0;
//    for ($x = 0; $x < $arr; $x++) {
//        $item = $arr[$x];
//        // this method doesn't seem to work ...
//        $s = $arr[$x];
//        $sum += $s;
//    }
//    return $sum;
//}

function countUppercase($arr)
{
    $count = 0;
    foreach ($arr as $a) {
        $b = preg_replace("/[^A-Z]+/", '', $a);
        $count += strlen($b);
    }
    print_r($count . "\n");
    return $count;
}

countUppercase(["SOLO", "hello", "Tea", "wHat"]);// ➞ 6

countUppercase(["little", "lower", "down"]);// ➞ 0

countUppercase(["EDAbit", "Educate", "Coding"]);// ➞ 5
