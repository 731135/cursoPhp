<?php

$numero1 =10;
$numero2 = 5;
$numero3 =20;
$numero4 = 20;
//Operadores aritmeticos
$resultado = $numero1 + $numero2;
echo $resultado."<br>";

$resultado = $numero1 - $numero2;
echo $resultado."<br>";

$resultado = $numero1 * $numero2;
echo $resultado ."<br>";

$resultado = $numero1 / $numero2;
echo $resultado ."<br>";

$resultado = $numero1 % $numero2;
echo $resultado ."<br>";

echo "-------------". "<br>";


//Operadores de asignacion

$numero1 = $numero2;
echo $numero1 . "<br>";

$numero1 += $numero2;
echo $numero1 . "<br>";

$numero1 -= $numero2;
echo $numero1 . "<br>";

$numero1 *= $numero2;
echo $numero1 . "<br>";

$numero1 /= $numero2;
echo $numero1 . "<br>";

echo "-------------". "<br>";

//Operadores de comparacion

if($numero1==5)
{
    echo "Es igual a: ". $numero1."<br>";
}
if($numero2===5)
{
    echo "es identico a: ". $numero2."<br>";
}
if($numero1!=10)
{
    echo "es diferente a: ".$numero2."<br>";
}
if($numero2!=="x")
{
    echo "No es identico a: ".$numero2."<br>";
}
if($numero1>4)
{
    echo "El numero ". $numero1. " es mayor a 4"."<br>";
}
if($numero2 < 10)
{
    echo "El numero ".$numero2. " es menor a 10"."<br>";
}
if($numero1>=5)
{
    echo "El numero ".$numero1. " es mayor o igual a 5"."<br>";
}
if($numero2<=5)
{
    echo "El numero ".$numero2. " es menor o igual a 5"."<br>";
}

echo "-------------". "<br>";

//Operadores logicos
if($numero1==5&&$numero2>=5)
{
    echo "Operador && se cumple". $numero1."<br>";
}
if($numero2===5 OR $numero1==5 )
{
    echo "Operador OR se cumple ". $numero2."<br>";
}
if($numero1!=10 XOR $numero2 ===40)
{
    echo "El operador XOR se cumple  ".$numero2."<br>";
}

echo "-------------". "<br>";

//Operafores de incremento y deceremento

echo ++$numero3. "<br>";

echo $numero4++. "<br>";

echo --$numero3. "<br>";

echo $numero4--. "<br>";

//Operadores de cadenas

$texto1 = "Cadena de Texto";
$texto2 = " ,Una Segunda Cadena de Texto";

echo $texto1 . $texto2. "<br>";
echo $texto1 .= " ,Una Tercera Cadena de Texto" . "bla";
echo "<br>";
echo $texto1;
?>