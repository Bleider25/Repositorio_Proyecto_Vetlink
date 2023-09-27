<?php
require("../php/conexion.php");
$nombre_p=$_POST["nombre_p"];
$descripcion_p=$_POST["descripcion_p"];
$precio_p=$_POST["precio_p"];
$imagen_p=$_FILES["imagen_p"];
$path = $_SERVER['DOCUMENT_ROOT']."/Pagina/img/producto"."/".$imagen_p["name"];
move_uploaded_file($imagen_p["tmp_name"],$path);



$data ="INSERT INTO productos (nombre_p, descripcion_p, precio_p, imagen_p) VALUES ('$nombre_p', '$descripcion_p', '$precio_p', '$imagen_p')";
$resultado= mysqli_query($conexion, $data);
if ($resultado){
    echo "Te has registrado correctamente";
}else{
    echo "No se a conectado";
}



?>


<h1>hols</h1>