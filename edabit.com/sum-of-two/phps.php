<?php

function sumOfTwo($a, $b, $v) {
    $val = [];
    foreach ($a as $an) {
        foreach ($b as $bn) {
            $val[] = $an + $bn;
        }
    }
    return in_array($v, $val);
}
