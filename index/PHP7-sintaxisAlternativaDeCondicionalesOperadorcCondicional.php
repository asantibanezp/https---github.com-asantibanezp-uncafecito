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

<p>Este tipo de sintaxis es mas utilizada que los otros condicionales alternativos, y se recomienda utilizarlo solo cuando tenemos mas practica con PHP</p>

<?php
$total = 1000;
$descuento = 0.18;
$calculo = ($descuento > 0) ? $total - ($total*$descuento)." (descuento del ".$descuento." incluido)" :  $total." (sin descuento)";

echo $calculo;
?>


</body>
</html>