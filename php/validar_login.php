<?php

include 'conexion.php';
if (isset($_POST['register'])){
    if(
        strlen($_POST['usuario']) >= 1 &&  strlen($_POST['password']) >= 1

    ) {

        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        $Sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $query = mysqli_query($conexion, $Sql);

        if ($query->num_rows===1) {
            $usuarioQ = $query->fetch_assoc();
            $nombre = $usuarioQ['nombre'];

            if ($usuarioQ['usuario']===$usuario) {
               if ($usuarioQ['contraseña']===$password) {
                  echo "<script>
                  alert('Bienvenido $nombre');
                  location.href = '../html/inicio.php'
                  </script>";

              } else{
                header('location:login.php?error=Contraseña incorrecta');
            }
        }
        else{
         echo "usuario incorrecto"; 
     }

 } else {

    header('location:login.php?error=Sin registro');

 }
}   else {

 header('location:login.php?error=Complete todos los campos');

}
}

?>