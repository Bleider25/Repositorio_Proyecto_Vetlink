<?php
  require_once "../conexion.php";
  
  $nombre = $_POST['txtnombre'];
  $apellido =$_POST['txtapellido'];
  $id = $_POST['id'];

  $datos = [$nombre,$apellido,$id];

  
  if ($obj->actualizarDatosNombre($datos)==1) {
    header("location:../index.php");
  }else{
    echo "fallo al agregar";
  }
?>