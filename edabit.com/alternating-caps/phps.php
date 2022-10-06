<?php

function alternatingCaps($word)
{
    $warr = str_split($word);
    $flip = true;
    foreach ($warr as $index => $w) {
        if (empty(trim($w))) {
            continue;
        }
        $warr[$index] = $flip ? strtoupper($w) : strtolower($w);
        $flip = ! $flip;
//        if ($flip) {
//            $warr[$index] = strtoupper($w);
//            $flip = false;
//        } else {
//            $warr[$index] = strtolower($w);
//            $flip = true;
//        }
    }
    $word = join($warr);
    print_r($word . "\n");
    return $word;
}

alternatingCaps("Hello");// ➞ "HeLlO"

alternatingCaps("How are you?");// ➞ "HoW aRe YoU?"

alternatingCaps("OMG this website is awesome!");// ➞ "OmG tHiS wEbSiTe Is AwEsOmE!"
