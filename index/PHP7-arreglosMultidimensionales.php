<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos | Multidimensionales </title>
</head>
<body>


<?php
$ciudades = array(
    array("México","CMDX","Guadalajara","Monterrey"),
    array("España", "Madrid", "Barcelona","Bilbao"),
    array("Colombia","Bogotá","Buraramanga","Medellín"),
    array("Perú","Lima","Cuzco","Arequipa")
);
for ($i=0; $i<count($ciudades); $i++){
    echo '<ul>';
    for ($j=0; $j<count($ciudades[$i]); $j++){
            echo '<li>'.$ciudades[$i][$j].'</li>';
    }
    echo '</ul>';
}
?>

</body>
</html>