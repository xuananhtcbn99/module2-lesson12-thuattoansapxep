<?php
include_once 'List.php';
$Country=new Arraylist();
$Country->Add('Vietnam',100);
$Country->Add('Japan',15);
$Country->Add('United Kingdom',23);
$Country->Add('Korean',30);
$Country->Add('China',1);
$Country->Add('Russia',52);
$Country->Add('United States',10);
echo "<pre>";
print_r($Country->bubbleSort1());