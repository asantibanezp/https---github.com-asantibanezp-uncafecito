<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos Constantes</title>
</head>
<body>
<h1>Arreglos Constantes</h1>

<p>Ahora se pueden definir constantes de Array con <strong>define()</strong></p><br>

<?php define('FRUTAS', ['pera','manzana','sandia','coco']);

echo '<pre>';
var_dump(FRUTAS);
echo '</pre>';
?>
</body>
</html>