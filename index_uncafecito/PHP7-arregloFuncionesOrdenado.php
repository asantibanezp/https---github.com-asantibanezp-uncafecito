<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Ordenado de arreglos</h1>

<p>
    <strong>sort(): </strong><span>Ordena un arreglo en orden ascendente</span><br>
    <strong>rsort(): </strong><span>Ordena un arreglo en orden descendente</span><br>
    <strong>asort(): </strong><span>Ordena un arreglo asociativo en orden ascendente segun valor</span><br>
    <strong>ksort(): </strong><span>Ordena un arreglo asociativo en orden ascendente segun una llave</span><br>
    <strong>arsort(): </strong><span>Ordena un arreglo asociativo en orden  descendente segun un valor</span><br>
    <strong>krsort(): </strong><span>Ordena un arreglo asociativo en orden  descendente segun una llave</span><br>

</p>


<?php
$notas = array(20, 30, 40, 50, 60, 70);

$alumno = array(
    'Nombre' => 'Andrés',
    'Apellidos' => 'Santibáñez Poblete',
    'Direccion' => 'Principe de Gales 7760',
    'Telefono' => '991850684',
);

echo '<p>NORMAL</p>';
foreach ($notas as $llave => $valor){
    echo '<p> El valor de la posicion '.$llave.' es: '.$valor.'</p>';
}
echo '<br>';

sort($notas);

echo '<p>RSORT</p>';
foreach ($notas as $llave => $valor){
    echo '<p> El valor de la posicion '.$llave.' es: '.$valor.'</p>';
}
echo '<br>';

rsort($notas);

echo '<p>RSORT</p>';
foreach ($notas as $llave => $valor){
    echo '<p> El valor de la posicion '.$llave.' es: '.$valor.'</p>';
}
echo '<br>';

asort($alumno);
echo '<p>ASORT</p>';
foreach ($alumno as $llave => $valor){
    echo '<p> El valor de la posicion '.$llave.' es: '.$valor.'</p>';
}
echo '<br>';

ksort($alumno);
echo '<p>KSORT</p>';
foreach ($alumno as $llave => $valor){
    echo '<p> El valor de la posicion '.$llave.' es: '.$valor.'</p>';
}
echo '<br>';

arsort($alumno);
echo '<p>ARSORT</p>';
foreach ($alumno as $llave => $valor){
    echo '<p> El valor de la posicion '.$llave.' es: '.$valor.'</p>';
}
echo '<br>';

krsort($alumno);
echo '<p>KRSORT</p>';
foreach ($alumno as $llave => $valor){
    echo '<p> El valor de la posicion '.$llave.' es: '.$valor.'</p>';
}
echo '<br>';


?>


</body>
</html>