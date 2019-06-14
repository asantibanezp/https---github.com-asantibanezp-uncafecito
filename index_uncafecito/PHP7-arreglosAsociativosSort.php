<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sort Arreglos Asociativos</title>
</head>
<body>
<h1>Sort con Arreglos Asociativos</h1>

<p>El uso de sort en un arreglo asociativo donde, por ejemmlo, se guarda los nombres, apellidos y demas datos de un empleado, puede <br>
transformarse en un gran problema, ya que sort elimina los indices y los crea nuevamente enumerados (0, 1, 2, 3). <br><br>
Para los arreglos asociativos, existe "asort", que se aplica de la misma forma que sort, e incluso se le puede poner las mismas
flags, auque no suele ser necesario por la naturaleza de los mismos.</p>

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


//***************Ejemplo usando sort. Ver que se destruyen los indices asociativos******************
//sort($alumno);
//foreach ($alumno as $key => $value){
//    echo "El valor de la propiedad ".$key.' es: '.$value.'<br>';
//}

asort($alumno);
foreach ($alumno as $key => $value){
    echo "El valor de la propiedad ".$key.' es: '.$value.'<br>';
}


echo '<br>';
//Se puede llamar a la llave de un arreglo sin comillas, pero no es una practica recomendable
echo "El nombre del empleado es: ".$alumno['Nombre']." ".$alumno[Apellidos];
?>

</body>
</html>