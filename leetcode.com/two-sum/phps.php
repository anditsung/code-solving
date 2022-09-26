<?php

function solve($q, $t) {
    for ($i = 0; $i < sizeof($q); $i++) {
        $sub = $t - $q[$i];
        if (in_array($sub, $q)) { 
            $key = array_search($sub, $q);
            if ($key == $i) continue;
            return [$i, $key];
        }
    }
}

$question = [
    [
        'q' => [2,7,11,15],
        't' => 9,
        'a' => [0,1],
    ],
    [
        'q' => [3,2,4],
        't' => 6,
        'a' => [1,2],
    ],
    [
        'q' => [3,3],
        't' => 6,
        'a' => [0,1],
    ],
];

foreach ($question as $q)
{
    $a = solve($q['q'], $q['t']);
    var_dump($a);
    var_dump($q['a']);
}