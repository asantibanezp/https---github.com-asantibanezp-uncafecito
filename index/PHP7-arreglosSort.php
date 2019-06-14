<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ArreglosSort</title>
</head>
<body>

<h1>SORT</h1>

<p>A veces es necasario ordenar los elemenros de un arreglo. Esto se logra facilmente con el comando "sort", el cual.</p>
<p>ordena todos los elementos de un arreglo de manera ascendente</p>
<br>
<p>Ejemplo: bool sort($array[,int $sort_flags=SORT_REGULAR])</p>
<br>

<strong>SORT_REGULAR: </strong> Compara elementos normalmente <br>
<strong>SORT_NUMERIC: </strong> Compara elementos de forma numérica <br>
<strong>SORT_STRING: </strong> Compara elementos como cadenas <br>
<strong>SORT_LOCALE_STRING: </strong> Compara elementos como cadenas, basándose en la configuracin regional en uso. Utiliza la configuracion regional,
la cual puede cambiarse usando "setlocale()" <br>


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
$alumnos[6]= "tomas";
$alumnos[7]= "Andrés";
$alumnos{8}= "pili";
$alumnos{8}= "Pupa";
$alumnos{8}= "mica";

?>

<h1>Sort</h1>

<?php
//Sort sin ningun flag ordena por defecto los valores por abecedario, privilegiando las mayusculas ya que en ASCII estan primero
//sort($meses);

//Agregandole el flag "SORT_NATURAL, en este caso, mostraria lo mismo"
//sort($meses, SORT_NATURAL);

//Aregandole el flag "SORT_FLAG_CASE los ordena por abecedario, por sobre las mayusculas"
sort($alumnos, SORT_NATURAL | SORT_FLAG_CASE);


$numeros = array(3, 1, 2, 50, 23);

sort($numeros);

foreach ($numeros as $key => $value){
    echo '<p>'.$key.' = '.$value.'</p>';
}

?>




<h1>Arreglos originales</h1>
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