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
<?php

$ecivil = $_GET["ecivil"];

switch ($ecivil){
    case 'soltero':
        $mensaje = "Ven a disfrutar de tu solteria";
        break;

    case 'casado':
        $mensaje = "Ven a disfrutar de tu matrimonio";
        break;

    case 'divorciado':
        $mensaje = "Ven a solucionar tus problemas";
        break;

    case 'viudo':
        $mensaje = 'Ven a recordar tus mejores momentos';
        break;

    default :
        $mensaje = 'Ven nomas';
}


echo "Te invitamos a nuestro viaje por el Amazonas. ".$mensaje;
?>




</body>
</html>