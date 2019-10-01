<?php

function calcularArea($base, $altura)
{
$area = ($base * $altura)/2;
return $area;
}

$Area = calcularArea(10,5);
echo 'El area del triangulo es: '.$Area .' Metro cuadrados';

?>