<?php
$servidor = '127.0.0.1';
//$servidor = 'localhost';
$usuario = 'root';
//$usuario = 'c84infosistem';
$password = '12345678';
//$password = 'B8Ww_Egh6nV';
$name_BD = 'ndpr';    
//$name_BD = 'c84infosistemBD';
$puerto = '3306';
//$miconexion = mysqli_connect($servidor,$usuario,$password,$name_BD,$puerto);
//$mysqli = mysqli_connect($miconexion);
$link = mysqli_connect($servidor,$usuario,$password,$name_BD,$puerto);
mysqli_select_db($link,$name_BD);


?>

