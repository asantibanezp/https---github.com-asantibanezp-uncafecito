<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclo FOR</title>
</head>
<body>
<?php

echo '<ul>';
for ($i=1; $i <= 10; $i++){
   echo "<li>El valor de i es: ".$i."</li>";
}
echo '</ul>';

echo '<ul>';
for ($i=10; $i >= 1; $i--){
    echo "<li>El valor de i es: ".$i."</li>";
}
echo '</ul>';

echo '<ul>';
for ($i=10,$o=1; $i >= 1; $i--,$o++){
    echo "<li>El valor de i es: ".$i." y el valor de o es :".$o."</li>";
}
echo '</ul>';
?>
</body>
</html>