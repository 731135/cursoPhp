<?php

//print_r($_POST);
//POST
/*if($_POST)
{
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year= $_POST['year'];
    $terminos= $_POST['terminos'];

    echo 'hola, '. $nombre. ' eres '. $sexo;
}
else 
{
    header('Location:http://localhost/CursoPHP/31.%20Formularios/');
}*/

//GET

//print_r($_GET);
if($_POST)
{
echo $nombre = $_GET['nombre'];
echo $sexo = $_GET['sexo'];
echo $year= $_GET['year'];
echo $terminos= $_GET['terminos'];
}
else 
{
    header('Location:http://localhost/CursoPHP/31.%20Formularios/');
}
?>