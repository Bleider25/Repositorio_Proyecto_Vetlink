<?php
include 'conexion.php';
if (isset($_POST['register'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        $Sql = "SELECT * FROM administrador WHERE nombre = '$usuario'";
        $query = mysqli_query($conexion, $Sql);

        if ($query->num_rows === 1) {
            $usuarioQ = $query->fetch_assoc();
            $nombre = $usuarioQ['nombre'];

            if ($usuarioQ['nombre'] === $usuario) {
                if ($usuarioQ['contraseña'] === $password) {
                    echo "<script>
                        alert('Bienvenido $nombre');
                        location.href = '../html/admin_productos.php';
                    </script>";
                } else {
                    header('location:admin_login.php?error=Contraseña incorrecta');
                }
            } else {
                echo "Admin incorrecto";
            }
        } else {
            header('location:admin_login.php?error=Sin registro');
        }
    } else {
        header('location:admin_login.php?error=Complete todos los campos');
    }
}