<?php

function findBob($names)
{
    $index = array_search("Bob", $names);
    $index = is_numeric($index) ? $index : -1;
    print_r($index . "\n");
    return $index;
}


findBob(["Jimmy", "Layla", "Bob"]);// ➞ 2

findBob(["Bob", "Layla", "Kaitlyn", "Patricia"]);// ➞ 0

findBob(["Jimmy", "Layla", "James"]);// ➞ -1
