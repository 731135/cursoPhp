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
        return $this->nombre . ", ".$this->edad.", ".$this->pais;
    }
}

$miguel = new Persona('Miguel Tellez', 22, 'Mexico');
echo $miguel -> mostrarInformacion();

?>