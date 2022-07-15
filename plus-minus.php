<?php

/*
 * Problem Link   : https://www.hackerrank.com/challenges/plus-minus/problem
 * Problem Name   : Plus Minus
 * Language:      : PHP 8.1.3
 * Programmer     : Ali Ahmed Tarmoush
 * Status         : Accepted
 */

function plusMinus($arr)
{
    $pn = $nn = $zn = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > 0) {
            $pn++;
        } elseif ($arr[$i] < 0) {
            $nn++;
        } else {
            $zn++;
        }
    }
    echo $pn / count($arr) . "\n";
    echo $nn / count($arr) . "\n";
    echo $zn / count($arr) . "\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map(
    'intval',
    preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY)
);

plusMinus($arr);
