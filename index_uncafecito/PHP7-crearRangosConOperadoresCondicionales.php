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

$edad = $_GET["edad"];

if ($edad < 10){
    echo 'Lo sentimos, eres muy pequeño para participar';
}
if ($edad > 10 && $edad <=20){
    echo "Te invitamos al concierto a disfrutar con tus amigos";
}
if ($edad > 20 && $edad <= 40){
    echo "Te invitamos a la obra de teatro";
}
if ($edad > 40){
    echo  "Te invitamos a una tarde de opera";
}
?>
</body>
</html>