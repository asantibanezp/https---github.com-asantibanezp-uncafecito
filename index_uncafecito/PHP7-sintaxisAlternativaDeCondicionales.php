<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sintaxis alternativas de condicionales en PHP</title>
</head>
<body>

<?php


//--------------------------------------Sintaxis alternativa 1------------------------------------------
$edad = 41;

if ($edad < 40) echo "Entradas gratis para el cine";
else echo "Entradas gratuitas para la opera";




//--------------------------------------Sintaxis alternativa 2------------------------------------------

$num1 = 20;
$num2 = 70;

if ($num1 < $num2):
    echo "El ".$num1." es menor que ".$num2;
elseif ($num1 > $num2):
    echo "El ".$num1." es mayor que ".$num2;
else:
echo $num1." y ".$num2." son  iguales ";
endif
?>


</body>
</html>