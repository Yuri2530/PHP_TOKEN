<?php

/*//echo "\n";
$lista = array("Nombre" =>"Yuri");
echo sha1(json_encode($lista).$_SERVER["REQUEST_TIME"]);
echo "\n";
echo uniqid(sha1(json_encode($lista).$_SERVER["REQUEST_TIME"]));
*/

setcookie("Time", $_SERVER["REQUEST_TIME"], time() + (3));
session_start();
echo $_COOKIE["Apellido"];
session_destroy();



?>