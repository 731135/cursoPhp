<?php

class persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInfo($nombre,$edad,$pais)
    {
        echo $nombre. "<br>";
        echo $edad. "<br>";
        echo $pais. "<br>";
    }
}

$carlos = new persona;
$carlos->nombre= 'Miguel Tellez';
$carlos->edad=22;
$carlos->pais='Mexico';
$carlos->mostrarInfo($carlos->nombre,$carlos->edad,$carlos->pais);

$alejandro = new persona;
$alejandro->nombre= 'Miguel Alejandro';
$alejandro->edad=44;
$alejandro->pais='Mexico';
