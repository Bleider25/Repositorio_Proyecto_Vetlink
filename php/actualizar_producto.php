<?php

require_once('conexion.php');

$id = $_POST['id_producto'];
$nombre = $_POST['nombre_p'];
$desc = $_POST['descripcion_p'];
$precio = $_POST['precio'];
/*$imagen = $_POST['imagen'];*/

$datos = array($nombre,$desc,$precio,$id);

$sql = "UPDATE  productos SET nombre_p ='$datos[0]',
                              descripcion_p = '$datos[1]',
                              precio_p = '$datos[2]'
                              /*imagen_p = $datos[3]*/
                              WHERE id_producto = '$datos[3]'";
 $resultado = mysqli_query($conexion,$sql); 
 
 if ($resultado) {
    header('location:../html/admin_productos.php');                         	// code...
   }                            
   else{
   	echo "Fallo al actualizar";
   }