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
<h1>Funciones de ubicación de elemento en un arreglo</h1>

<p>Nos permiten mover el puntero de un arreglo en distintas ubicaciones </p><br>

<ul>
    <li>
        <p>Current():</p>
        <span>Devuelve el elemento actual en un arreglo</span>
    </li>
    <br>
    <li>
        <p>Each():</p>
        <span>Devolver el par clave/valor actual de un arreglo y avanzar el cursor del arreglo</span>
    </li>
    <br>
    <li>
        <p>Prev():</p>
        <span>Rebobina el punto interno del arreglo</span>
    </li>
    <br>
    <li>
        <p>Reset():</p>
        <span>Establece el puntero interno de un arreglo a su primer elemento</span>
    </li>
    <br>
    <li>
        <p>Next():</p>
        <span>Avanza el puntero interno de un arreglo</span>s
    </li>
    <br>
    <li>
        <p>End():</p>
        <span>Establece el puntero interno de un arreglo a su último elemento</span>
    </li>
    <br>
</ul>


<?php
$meses = array("enero","febrero", "marzo,", "abril", "mayo", "junio","julio",
                "agosto", "septiembre","octubre","noviembre","diciembre");



echo current($meses).'<br>';
echo next($meses).'<br>';
echo end($meses).'<br>';
echo prev($meses).'<br>';
echo next($meses).'<br>';
echo next($meses).'<br>';
echo current($meses).'<br>';

?>
</body>
</html>