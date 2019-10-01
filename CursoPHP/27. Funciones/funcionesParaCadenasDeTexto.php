<?php

$texto = ' < > & "" ';
$nombre = ' Miguel ';

echo htmlspecialchars($texto);
echo "<br>";
echo trim($nombre);
echo "<br>";
echo strlen($nombre);
echo "<br>";
echo substr($nombre,0,3);
echo "<br>";
echo strtoupper($nombre);
echo "<br>";
echo strtolower($nombre);
echo "<br>";
echo strpos($nombre, 'g');
?>