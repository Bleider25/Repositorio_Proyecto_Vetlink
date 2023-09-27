<?php
include('conexion.php');

//$id = $_POST['id_producto'];
$nombre = $_POST['nombre_p'];
$desc = $_POST['descripcion_p'];
$precio = $_POST['precio'] ;
$imagen_p=$_FILES["imagen"];


$sql = "UPDATE productos SET name='$nombre', descripcion='$desc', precio='$precio', imagen='$imagen_p' WHERE id='$id'";


$query = mysqli_query($conexion,$sql);

if ($query) {
header("location:../html/admin_productos.php");
}
else{
	echo "error";
}
?>