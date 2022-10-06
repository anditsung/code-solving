<?php

function secondLargest($a) {
    sort($a);
    return $a[sizeof($a) - 2];
}
