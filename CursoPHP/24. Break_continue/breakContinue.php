<?php
$paises = array(
    'Mexico','Espana','Colombia','Peru',
    'Argentina','Venezuela','Guatemala'
);

foreach($paises as $pais)
{
    echo $pais . '<br/>';
    if($pais == 'Colombia')
    {
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Paises latinoamericanos</h1>
    <?php
    foreach($paises as $pais)
    {
        if($pais == 'Colombia')
        {
            continue;
        }
        echo $pais . '<br/>';
    } 
    ?>
</body>
</html>

