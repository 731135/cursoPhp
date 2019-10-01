<?php

function saludo($nombre)
{
    echo "Esto es un saludo usuario: ". $nombre;
}

function suma($n1,$n2)
{
    $res = $n1+$n2;
    return $res;
}


saludo('Miguel');
$res = suma(10,20);
echo "<br>";
echo $res;

?>