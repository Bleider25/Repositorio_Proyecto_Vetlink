<?php
  require_once "conexion.php";
  
  $conexion=$obj->conexion();
  $id= $_GET['id'];
  $sql = "SELECT nombre,apellido from persona where id = '$id'";
  $result = mysqli_query($conexion,$sql);
  $ver = mysqli_fetch_row($result);
  ?>