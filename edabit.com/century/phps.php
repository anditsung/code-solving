<?php

function century($year)
{
    $century = intval($year / 100);
    $plus = intval($year % 100);
    $century = $plus > 0 ? $century + 1 : $century;
    print_r($century . " century \n");
    return $century;
}

century(1756);// ➞ "18th century"

century(1555);// ➞ "16th century"

century(1000);// ➞ "10th century"

century(1001);// ➞ "11th century"

century(2005);// ➞ "21st century"

century(2125);// ➞ "22nd century"
