<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre,$edad,$pais)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->pais=$pais;
    }
    public function mostrarInformacion()
    {
        echo $this->nombre;
    }
}

$carlos = new Persona('Miguel Tellez',22,'Mexico');
$carlos -> mostrarInformacion();
