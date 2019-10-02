<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion()
    {
        echo $this->nombre;
    }
}

$carlos = new Persona();
$carlos->nombre= 'Miguel Tellez';
$carlos->edad=22;
$carlos->pais='Mexico';

$carlos-> mostrarInformacion();




