<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos Desordenar</title>
</head>
<body>

<h1>Arreglos Desordernar</h1>

<ul>
    <li><strong>Funcion Shuffle</strong>
    <p>La Funcion 'shuffle()' desordena un arreglo creando un orden aleatorio de sus elementos. Utiliza un generador de numeros <br>
    seudo aleatorios que no es apto para fines criptograficos y se caracteriza por ser DESTRUCTIVA, ya que el arreglo no queda <br>
        con el mismo orden indice-valor. Es decir que cambia <br>
        <div style="border: 1px solid black; width: 300px">
            bool shuffle(array &$arreglo)
        </div>
    </p>
    </li>
    <li><strong>Funcion array_rand</strong>
        <p>La Funcion 'array_rand()' selecciona uno o mas valores aleatorios de un arreglo y devuelve la clave (o claves) de dichos valores aleatorios.<br>
            Utiliza un generador de numeros seudo aleatorios que no es apro para fines critograficos. NO ES DESCTUCTIVO ya que no modifica <br>
        el orden indice-valor del arreglo.
        <div style="border: 1px solid black; width: 300px">
            mixed array_rand(array $array[,int $num = 1])
        </div>
        </p>
    </li>
</ul>

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

?>

<?php
echo '<ul> *****Arreglo original*****';
foreach ($alumnos as $key => $value){
    echo '<li>'.$value.'</li>';
}
echo '</ul>';

shuffle($alumnos);

echo '<ul> *****Arreglo con shuffle aplicado*****';
foreach ($alumnos as $key => $value){
    echo '<li> llave: '.$key.' valor: '.$value.'</li>';
}
echo '</ul>';

$examen = array_rand($alumnos, 2);

echo '<ul>*****Seleccion luego de aplicar array_rand*****';
foreach ($examen as $key => $value){
    echo '<li> Darán el examen: '.$value.' '.$alumnos[$value].'</li>';
}
echo '</ul>';

?>

</body>
</html>