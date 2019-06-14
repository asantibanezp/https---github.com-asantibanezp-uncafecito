<?php
/**
 * Created by PhpStorm.
 * User: soporte
 * Date: 07/05/2019
 * Time: 12:12
 */

$edad = &$_GET['edad'];

echo 'Edad: '.$edad.' '.'<br>';

if ($edad > 70) {
    echo 'No tienes la edad, ya se te pasó la micro';

}elseif ($edad > 30){
    echo 'Tienes mas de 30 y puedes entrar';
}elseif ($edad > 18){
    echo 'Tienes mas de 18, felicidades';

}else{
    echo 'Tu edad es insuficiente';
}

