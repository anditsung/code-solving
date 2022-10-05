<?php

function solve($list1, $list2)
{
    $merge = array_merge($list1, $list2);

    sort($merge);

    return $merge;
}

$aa = solve([1,2,4], [1,3,4]);

var_dump($aa);