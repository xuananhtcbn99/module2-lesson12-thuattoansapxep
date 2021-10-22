<?php

function bubbleSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $t = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $t;
            }
        }
    }
    return $arr;
}
//
//
//$myArr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
//echo "<pre>";
//print_r(bubbleSort($myArr));