<?php

//declare(strict_types=1);
function cuadrado(int $numero)
{
    return $numero*$numero;
}

$numero =25;
echo " El cuadrado de ".$numero. " es ". cuadrado($numero)."<br>";
$numero ="54";
echo " El cuadrado de ".$numero. " es ". cuadrado($numero);
$numero ="sgfdvh";
echo " El cuadrado de ".$numero. " es ". cuadrado($numero);

