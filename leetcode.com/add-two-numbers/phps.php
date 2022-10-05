<?php

function solve($list1, $list2)
{
    $num1 = intval(implode('', array_reverse($list1)));
    $num2 = intval(implode('', array_reverse($list2)));

    $sum = $num1 + $num2;

    return str_split(strrev(strval($sum)));
}

$aa = solve([2,4,3], [5,6,4]);

var_dump($aa);