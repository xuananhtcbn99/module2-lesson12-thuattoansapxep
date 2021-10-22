<?php

use PHPUnit\Framework\TestCase;

include_once "../src/bubbleSort.php";
include_once "../src/selectionSort.php";
include_once "../src/insertionSort.php";

class SortTest extends TestCase
{
    function test_array_bubbleSort1()
    {
        $arr = [1,9, 4, 6, 5, 0];
        $result = bubbleSort($arr);
        $expected = [0, 1, 4, 5, 6, 9];
        $this->assertEquals(implode($expected), implode($result));
    }
    function test_array_bubbleSort2()
    {
        $arr = [1,9,4.5,6.6,5.7,-4.5];
        $result = bubbleSort($arr);
        $expected = [-4.5,1,4.5,5.7,6.6,9];
        $this->assertEquals($expected, $result);
    }
    function test_array_selectionSort1()
    {
        $arr = [1,9,4.5,6.6,5.7,-4.5];
        $result = selectionSort($arr);
        $expected = [-4.5,1,4.5,5.7,6.6,9];
        $this->assertEquals($expected, $result);
    }
    function test_array_selectionSort2()
    {
        $arr = [2,3,2,5,6,1,-2,3,14,12];
        $result = selectionSort($arr);
        $expected = [-2,1,2,2,3,3,5,6,12,14];
        $this->assertEquals($expected, $result);
    }
    function test_array_insertionSort1()
    {
        $arr = [2,3,2,5,6,1,-2,3,14,12];
        $result = insertionSort($arr);
        $expected = [-2,1,2,2,3,3,5,6,12,14];
        $this->assertEquals($expected, $result);
    }
//    function test_array_insertionSort2()
//    {
//        $arr = [2,3,2,5,6,1,-2,3,14,12];
//        $result = bubbleSort1($arr);
//        $expected = [14,12,6,5,3,3,2,2,1,-2];
//        $this->assertEquals($expected, $result);
//    }
}