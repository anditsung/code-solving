<?php

function solve($ops) {
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

function solveTwo($ops) {
    $score = array();
    foreach ($ops as $key => $op) {
        if ($op == 'D') {
            array_push($score, $score[count($score) - 1] * 2);
        } elseif ($op == 'C') {
            array_splice($score, count($score) - 1, 1);
        } elseif ($op == '+') {
            array_push($score, $score[count($score) - 1] + $score[count($score) - 2]);
        } else {
            array_push($score, $op);
        }
    }
    return $score;
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
    $arr = solveTwo($score['score']);
    echo array_sum($arr) == $score['result'] ? "CORRECT\n" : "INCORRECT\n";
}


