<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclo While</title>
</head>
<body>
<?php

$contador = 0;
$veces = 7;

while ($contador <= $veces){
    echo '<p>Vuelta numero: '.$contador.'</p>';
    $contador++;
}
echo '<p> El contador quedó en: '.$contador.'</p>';


?>

</body>
</html>