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
$edad = 10;
$ecivil = "soltero";

if ($edad < 40) {
    echo "Lo invitamos la tarde del Domingo 19 de Mayo, a disfrutar de un tremendo concierto de Devo, banda americana que celebra 50 años de musica, ";
        if ($ecivil == "casado"){
            echo "para ti y toda tu familia. ";
        }else{
            echo "para que disfrutes como nunca antes. ";
        }
}else{
    echo "Lo invitamos la tarde del Domingo 19 de Mayo, a disfrutar de un paseo de relajacion a las termas de quinamavida, ";
    if ($ecivil == "casado"){
        echo "para usted y toda su familia. ";
    }else{
        echo "para que disfrute tranquilo como usted merece. ";
    }
    }
echo "<br>";
echo "Ademas, sortearemos diversos premios que te interesarán.";


?>

</body>
</html>