<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <div class ="wrap">
        <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">
           
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">   
   
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje:" ></textarea>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">
    </form>
    </div>
</body>
</html>