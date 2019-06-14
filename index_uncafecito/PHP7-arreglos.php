<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos</title>
</head>
<body>

<h1>Arreglos, arrays, vectores o matrices</h1>

<p>Los arreglos son muy importantes en la programacion.</p>
<p>El nombre "arreglo" es una nomencatura un tanto erronea que se puede prestar para confusiones, ya que los arreglos son realmente "matrices"</p>
que se pueden asimilar a "cajoneras". Si las variables son como "cajas", los arreglos vendrían siendo como "cajoneras".
<p>En la gran mayoria de lenguajes, la numeracion de los arreglos inician en 0</p>
<p>Pueden contener distintos tipos de datos: como valores enteros, booleanos, cadenas, cadenas que representen fechas decimales, arreglos dentro de otros arreglos, objetos (diccionario)</p>

<?php
$meses = array("enero","febrero","Marzo","Abril","Mayo","Junio","Julio",
"Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$dias[]= "lunes";
$dias[]= "martes";
$dias[]= "miercoles";
$dias[]= "jueves";
$dias[]= "viernes";
$dias[]= "sabado";
$dias[]= "domingo";


$alumnos[0]= "Mamita";
$alumnos[1]= "Tatá";
$alumnos[2]= "Juan";
$alumnos[3]= "Yaya";
$alumnos[4]= "Tia";
$alumnos[5]= "Tio";
$alumnos[6]= "Andrés";


var_dump($meses);
echo '<br>';
var_dump($dias);
echo '<br>';
var_dump($alumnos);
echo '<br>';
?>
<h1>Ciclo Foreach para recorrer o barrer arreglos</h1>
<p>Foreach es un ciclo especializado en recorrer arreglos. </p> <p>Si bien es cierto tambien se puede hacer con otro tipo
de ciclos, el ciclo Foreach nos evita el manejo de contadors,tamaño de arreglos y el uso de caracteres "[" y "]"</p>

<?php
foreach ($meses as $key => $value){
    echo 'La posicion '.$key.' del arreglo MESES es: '.$value;
    echo '<br>';
}
echo '<br>';

foreach ($dias as $key => $value){
    echo 'La posicion '.$key.' del arreglo DIAS es: '.$value;
    echo '<br>';
}
echo '<br>';

foreach ($alumnos as $key => $value){
    echo 'La posicion '.$key.' del arreglo ALUMNOS es: '.$value;
    echo '<br>';
}
echo '<br>';

?>

</body>
</html>