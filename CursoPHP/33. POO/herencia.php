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
        return $this->nombre . ", ".$this->edad.", ".$this->pais.", ".$this->carrera;
    }
}

class Estudiante extends Persona
{
    function __construct($nombre,$edad,$pais,$carrera)
    {
      parent::__construct($nombre,$edad,$pais);
        $this->carrera=$carrera;
    }
}



$miguel = new Estudiante('Miguel Tellez', 22, 'Mexico','ISC');
echo $miguel -> mostrarInformacion();


// class Estudiante
// {
//     public $nombre;
//     public $edad;
//     public $pais;
//     public $carrera;

//     function __construct($nombre,$edad,$pais,$carrera)
//     {
//         $this->nombre=$nombre;
//         $this->edad=$edad;
//         $this->pais=$pais;
//         $this->carrera=$carrera;
//     }

//     public function mostrarInformacion()
//     {
//         return $this->nombre . ", ".$this->edad.", ".$this->pais.", ".$this->carrera;
//     }
// }

?>