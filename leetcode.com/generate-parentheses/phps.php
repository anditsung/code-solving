<?php

function generate(&$result, $string, $open, $close, $n)
{
    if ($open == $n && $close == $n) {
        $result[] = $string;
        return;
    }

    if ($open < $n) {
        generate($result, $string . "(", $open + 1, $close, $n);
    }

    if ($close < $open) {
        generate($result, $string . ")", $open, $close + 1, $n);
    }
}

function generateParentheses($n)
{
    $result = [];

    generate($result, "", 0, 0, $n);

    return $result;
}

$a = generateParentheses(3);

var_dump($a);