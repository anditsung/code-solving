<?php

function splitCode($code)
{
    $number = preg_replace("/[^0-9]+/","", $code);
    $code = substr($code, 0, strlen($code) - strlen($number));
    $r = [$code, $number];
    var_dump($r);
    return $r;
}

splitCode("TEWA8392");// ➞ ["TEWA", 8392]

splitCode("MMU778");// ➞ ["MMU", 778]

splitCode("SRPE5532");// ➞ ["SRPE", 5532]
