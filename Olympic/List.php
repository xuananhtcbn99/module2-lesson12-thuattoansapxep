<?php
include_once "Country.php";
class Arraylist
{
    public $arr;

    public function __construct()
    {
        $this->arr=[];
    }

    public function push($data)
    {
        array_push($this->arr, $data);
    }

    public function Add($name, $totalGoldMedals)
    {
        $add = new Country($name, $totalGoldMedals);
        $this->push($add);
    }

    function bubbleSort1()
    {
        for ($i = 0; $i < count($this->arr) - 1; $i++) {
            for ($j = $i + 1; $j < count($this->arr); $j++) {
                if ($this->arr[$i]->totalGoldMedals < $this->arr[$j]->totalGoldMedals) {
                    $t = $this->arr[$j];
                    $this->arr[$j] = $this->arr[$i];
                    $this->arr[$i] = $t;
                }
            }
        }
        return $this->arr;
    }

}