<?php

$host = "localhost";
$usuario = "root";
$password = "";
$database = "vetlink";

$con = new mysqli($host, $usuario, $password, $database);

if (!$con) {
    echo "Conexion fallida";
}

?>