<?php
/**
 * Created by PhpStorm.
 * User: soporte
 * Date: 02/05/2019
 * Time: 11:20
 */

//$usuario = $_GET['usuario']??'nadie';
//$usuario = isset($_GET['usuario'])?$_GET['usuario']:'nadie';
$usuario = $_GET["usuario"]??$_POST["usuario"]??"anonimo";

print $usuario;


?>