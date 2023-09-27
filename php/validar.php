<?php
include 'conexion.php';

if (isset($_POST['register'])) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $fecha = date("d/m/y");

    $errores = array();

    // Validar que todos los campos estén completos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($direccion) || empty($telefono) || empty($usuario) || empty($password)) {
        $errores[] = "Complete todos los campos";
    }

    // Validar el formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico ingresado no es válido";
    }

    // Validar número de teléfono celular
    if (!preg_match("/^\d{10}$/", $telefono)) {
        $errores[] = "El número de teléfono celular debe tener 10 dígitos numéricos";
    }

    // Validar la longitud de la contraseña
    if (strlen($password) < 6 || strlen($password) > 20) {
        $errores[] = "La contraseña debe tener entre 6 y 20 caracteres";
    }

    // Verificar si hay errores
    if (count($errores) === 0) {
        $consulta = "INSERT INTO usuarios(nombre_usua, apellido, correo_electronico, direccion, telefono, usuario, contraseña, fecha)    
        VALUES('$nombre', '$apellido', '$email', '$direccion', '$telefono', '$usuario', '$password', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            header('location: registrar.php?error=!Registro exitoso¡');
        } else {
            header('location: registrar.php?error=Ha ocurrido un error');
        }
    } else {
        $errorString = implode("<br>", $errores);
        header("location: registrar.php?error=$errorString");
    }
}
?>