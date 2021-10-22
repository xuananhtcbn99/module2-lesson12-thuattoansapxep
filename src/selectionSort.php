<?php
function selectionSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j]<$arr[$min]) {
                $min = $j;
            }
        }
        $arr = swapPositions($arr, $i, $min);
    } return $arr;
}
function swapPositions($data, $left, $right)
{
    $temp = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $temp;
    return $data;
}