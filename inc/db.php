<?php
$dbhost="127.0.0.1";
$dbusuario="homestead";
$dbpassword="secret";
$db="sonoacustica";

$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db, $conexion);
//Normalizo BD para Caracteres UTF8
mysql_query("SET NAMES 'utf8'");
?>