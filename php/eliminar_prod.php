<?php

 $id = $_GET['id'];//La variable $id guarda lo que recibe del boton eliminar mediante la variable id

  require_once "conexion.php";

     $sql = "DELETE FROM productos WHERE id_producto = '$id'";
     $resultado = mysqli_query($conexion,$sql);
     if ($resultado) {
     header("location:../html/admin_productos.php");
       
     }
     else{
        echo "fallo al eliminar";
     }
?>