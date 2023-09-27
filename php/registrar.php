<?php 
include('conexion.php');
include_once('validar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetLink</title>
    <link rel="icon" href="img/icons/Logo1.png">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/crud/register.css" rel="stylesheet">
    <link rel="icon" href="../img/icons/Logo1.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
        <form method="post" class="row">
        <h2 class="text-center">Regístrate</h2>
        <hr class="mb-4">
            <div class="col-lg-6 col-md-6 mx-auto">
                

                <!-- Para Nombre -->
                <div class="input-wrapper mx-auto">
                    <input type="text" name="nombre" placeholder="Nombre" style="width: 120%;">
                    <img class="Input-icon" src="images/name.svg" alt="">
                </div>

                <!-- Para Apellido -->
                <div class="input-wrapper mx-auto">
                    <input type="text" name="apellido" placeholder="Apellido" style="width: 120%;">
                    <img class="Input-icon" src="images/name.svg" alt="">
                </div>

                <!-- Para email -->
                <div class="input-wrapper mx-auto">
                    <input type="email" name="email" placeholder="Correo Electrónico" style="width: 120%;">
                    <img class="Input-icon" src="images/email.svg" alt="">
                </div>
                <!-- Para Direccion -->
                <div class="input-wrapper mx-auto">
                    <input type="text" name="direccion" placeholder="Dirección" style="width: 120%;">
                    <img class="Input-icon" src="images/email.svg" alt="">
                </div>

            </div>
            <br>
            <div class="col-lg-6 col-md-6 col-sm-6">

                <!-- Para Teléfono -->
                <div class="input-wrapper mx-auto">
                    <input type="tel" name="telefono" placeholder="Teléfono" style="width: 120%;">
                    <img class="Input-icon" src="images/phone.svg" alt="">
                </div>

                <!-- Para Usuario -->
                <div class="input-wrapper mx-auto">
                    <input type="text" name="usuario" placeholder="Usuario" style="width: 120%;">
                    <img class="Input-icon" src="images/phone.svg" alt="">
                </div>

                <!-- Para Contraseña -->
                <div class="input-wrapper mx-auto">
                    <input type="password" name="password" placeholder="Contraseña" style="width: 120%;">
                    <img class="Input-icon" src="images/phone.svg" alt="">
                </div>
                
                <div class="input-wrapper mx-auto">
                    <input class="btn text-light" type="submit" name="register" value="Terminar" style="width: 120%;">
                </div>
            </div>
                        <?php
                        if (isset($_GET['error'])) {
                        ?>
                        <p class="text-center">
                            <?php
                            echo $_GET['error'];
                            ?>
                        </p>
                        <?php
                        }
                        ?>
                <br>
                
            <p class="text-center col-12 mx-auto">¿Ya tienes cuenta? <a href="login.php">Inicia Sesión</a>!</p>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/5567fc9696.js" crossorigin="anonymous"></script>
    <script src="../js/producto.js"></script>
</body>
</body>
</html>

<!-- ESTO ES PARA LLAMAR A PHP -->
