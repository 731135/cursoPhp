<?php

$nombre = isset($_GET['nombre'])? $_GET['nombre'] : 'Anonimo';

$nombre2 = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;
echo $nombre2;