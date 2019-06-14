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


<h1>Algunas funciones de los arreglos</h1>

<ul>

    <li>
        <h4>array_push</h4>
        <p>Agrega elementos al final del arreglo</p>
        <?php
        array_push($meses,"treceavo mes", "catorceavo mes");
        ?>
    </li>
    <li>
        <h4>array_unshift</h4>
        <p>Agrega elementos al comienzo del arreglo</p>
        <?php
        array_unshift($dias,"primerisimo","segundisimo")
        ?>
    </li>
    <li>
        <h4>array_shift</h4>
        <p>Elimina el primer elemento del arreglo</p>
        <?php $mesEliminado = array_shift($meses);?>
    </li>
    <li>
        <h4>array_slice</h4>
        <p>Copia elementos de un arreglo (slice solo copia, splice los corta)</p>
        <?php $mesesnuevos = array_slice($meses,11,2);
         foreach ($mesesnuevos as $key => $value){
             echo '<p> el elemento '.$key.' es: '.$value.'</p>';

         }

        ?>
    </li>
    <li>
        <h4>array_splice</h4>
        <p>Corta elementos de un arreglo (slice solo copia, splice los corta)</p>
        <?php $diaseliminados = array_splice($dias, 5,2)
        ?>
    </li>
    <li>
        <h4>array_merge</h4>
        <p>Une dos o más arreglos</p>


      <!--  *********************   Imprimo los arreglos y separo con hr************************ -->

        <hr>

        <?php
        echo  '<h3>Arreglo Meses</h3>';
        foreach ($meses as $key => $value){
            echo '<p> La posicion '.$key.' es: '.$value.'</p>';
        };
        echo  '<h3>Arreglo Dias</h3>';
        foreach ($dias as $key => $value){
            echo '<p> La posicion '.$key.' es: '.$value.'</p>';
        };
            ?>
        <?php
        echo  '<h3>Arreglo MesesDias</h3>';
        $mesesdias = array_merge($meses,$dias);
        foreach ($mesesdias as $key => $value){
            echo '<p> La posicion '.$key.' es: '.$value;
        };
        ?>
    </li>


</ul>
<?php
?>



</body>
</html>