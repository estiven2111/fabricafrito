<?php

$host="localhost";
$db="db_fabricafrito";
$usuario="root";
$contrasenia="";

try {
    $conexion= new PDO("mysql:host=$host;dbname=$db",$usuario, $contrasenia);
    if ($conexion){ echo "";}
} catch (Exception $ex) {
    echo $ex->getMessage();
}


?>