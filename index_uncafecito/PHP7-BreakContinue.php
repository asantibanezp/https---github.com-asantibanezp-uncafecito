<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Break y Continue</title>
</head>
<body>
<h1>Break y Continue</h1>

<p>Los comandos break y continue sirven para generar control de flujo en un ciclo</p>

    <p>Break: Termina del ciclo y no vuelve a valuar ninguna expresion, saliendose completamente
    del ciclo sin impotar el valor de la expresion</p>

    <p>Continue: Repite el ciclo sin ejecutar las instrucciones que esten después de esta </p>

    <p>Lo mas comun y recomendable es uilizarlas con de la mano de alguna condicional</p>


<?php

//Un ejemplo de break
for ($i=1; $i<=10; $i++){
    echo 'El valor de i es: '.$i.'<br>';
   if ($i==7) break;
}
echo '<br>';
for ($i=1; $i<=10; $i++){
    if ($i%2 == 0 ) continue;
    echo 'El valor de i es: '.$i.'<br>';
}
echo '<br>';
$i=1;
for (;;){
    if ($i > 10 ) break;
    echo 'El valor de i es: '.$i.'<br>';
    $i++;
}



?>

</body>
</html>