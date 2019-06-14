<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos Asociativos</title>
</head>
<body>
<h1>Arreglos Asociativos</h1>
<p>No siempre es conveniente usar numeros para identficar los elementos de un arreglo.</p>
<p>Para el humano es mas facil usar "letreros" o "nombres" para identificar las cosas.</p>
<p>PHP permite crear arreglos cuyos elementos tienen nombes en vez de numeros</p>


<?php
$alumno = array(
    'Nombre' => 'Andrés',
    'Apellidos' => 'Santibáñez Poblete',
    'Direccion' => 'Principe de Gales 7760',
    'Telefono' => '991850684',
    );
foreach ($alumno as $key => $value){
    echo "El valor de la propiedad ".$key.' es: '.$value.'<br>';
}
echo '<br>';
//Se puede llamar a la llave de un arreglo sin comillas, pero no es una practica recomendable
echo "El nombre del empleado es: ".$alumno['Nombre']." ".$alumno[Apellidos];
?>

</body>
</html>