<?php

$amigo = array(
    'telefono'=>6641577896, 
    'edad'=>22, 
    'pais'=>'Mexico'
    );

$semana = array (
    'lunes',
    'martes',
    'miercoles',
    'jueves',
    'viernes',
    'sabado',
    'domingo'
);


extract($amigo);

echo "<br>";
echo $telefono;
echo "<br>";
echo $edad;
echo "<br>";
echo $pais;
echo "<br>";
echo "<br>";
foreach($semana as $dia)
{
    echo $dia . '<br />';
}

array_pop($semana);
echo "------array pop------"."<br>";
foreach($semana as $dia)
{
    echo $dia . '<br />';
}

echo "<br>";
echo join(' -:-:-:- ',$semana);
echo "<br>";

$semana_reverse = array_reverse($semana);
echo join(' -:-:-:- ',$semana_reverse);


?>