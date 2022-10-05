<?php

function solve($q, $t) {
    foreach ($q as $key => $value) {
        $sub = $t - $q[$key];
        if (in_array($sub, $q)) {
            $subkey = array_search($sub, $q);
            if ($subkey == $key) continue;
            return [$key, $subkey];
        }
    }
    return [];
}

// https://leetcode.com/problems/two-sum/discuss/367859/2-solutions-for-PHP
function solveTwo($nums, $target)
{
    $extra_array = array();
        
    for ($i = 0;$i < count($nums);$i++) {
        $extra_array[$target - $nums[$i]] = $i;
    }
    
    for ($j = 0;$j < count($nums);$j++) {
        if (array_key_exists($nums[$j], $extra_array) && $j !== $extra_array[$nums[$j]]) {
            return array($j, $extra_array[$nums[$j]]);
        }
    }
    
    return array(0,0);
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
    $a = solveTwo($q['q'], $q['t']);
    echo ($a == $q['a']) ? "CORRECT\n" : "INCORRECT\n";
}