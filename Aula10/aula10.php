<?php

$cars = array("Volvo", "BMW", "Toyota");

echo count ($cars);

echo ("<br>");

$myArr = array("Volvo", 15, ["apples", "bananas"]);

echo count ($myArr);

echo ("<br>");

$cars = array("brand"=>"ford", "model"=>"mustang", "year"=>1964); # "year" => "1964" => Mostra string / '1964' => Mostra string / 1964 => Int
var_dump ($cars);

echo ("<br>");

$cars = array("brand"=>"ford", "model"=>"mustang", "year"=>1964);
echo $cars["model"];

foreach ($cars as $x => $y){
    echo "$x: $y <br>";
}


?>