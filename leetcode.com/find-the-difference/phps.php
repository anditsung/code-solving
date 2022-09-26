<?php

function solve($s, $t)
{
    $sa = str_split($s);
    $ta = str_split($t);

    sort($sa);
    sort($ta);

    return implode('', array_diff($ta, $sa));
}

$s = "abcd";
$t = "abcde";

echo solve($s, $t);

$s = "";
$t = "y";

echo solve($s, $t);