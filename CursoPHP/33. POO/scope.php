<?php

class Usuario
{
    public $nombre;
    private $correo;
    protected $edad;

    function __construct($nombre,$correo,$edad)
    {
        $this->nombre=$nombre;
        $this->correo=$correo;
        $this->edad=$edad;
    }

    public function mostrarInfo()
    {
        return $this->correo;
    }
}

$miguel = new Usuario('Miguel','miguel.tellez@tectijuana.edu.mx',22);
echo $miguel->mostrarInfo();
