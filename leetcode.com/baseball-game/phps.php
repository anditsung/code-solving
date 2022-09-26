<?php

function parseScore($ops) {
    for($i = 0; $i < sizeof($ops); $i++) {
        if ($ops[$i] == 'C') {
            $del = array_splice($ops, $i - 1, 2);
            $ops = array_diff($ops, $del);
            $i -= 2;
        } elseif ($ops[$i] == 'D') {
            $ops[$i] = intval($ops[$i - 1]) * 2;
        } elseif ($ops[$i] == '+') {
            $ops[$i] = intval($ops[$i - 1]) + intval($ops[$i - 2]);
        } else {
            continue;
        }
    }
    return $ops;
}

$scores = [
    [
        "score" => ["5","2","C","D","+"],
        "result" => 30,
    ],
    [
        "score" => ["5","-2","4","C","D","9","+","+"],
        "result" => 27,
    ],
    [
        "score" => ["1","C"],
        "result" => 0,
    ]
    
];

foreach ($scores as $score) {
    $arr = parseScore($score['score']);
    if (array_sum($arr) == $score['result']) {
        echo "CORRECT\n";
    } else {
        echo "INCORRECT\n";
    }
}


