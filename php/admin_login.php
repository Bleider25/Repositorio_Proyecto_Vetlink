<?php
include('conexion.php');
include('validar_log_admin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetLink</title>
    <link rel="icon" href="img/icons/Logo1.png">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/crud/login-admin.css" rel="stylesheet">
    <link rel="icon" href="../img/icons/Logo1.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form method="post"> 
      
        <h2 class="text-center">Admin Login</h2>
       
        <!-- Para Nombre de usuario -->
        <div class="input-wrapper">
            <input type="text" name="usuario" placeholder="Administrador" >
        </div>
        
        <!-- Para Contraseña -->
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" >
        </div>
        <p>
            
        </p>
        <input class="btn text-light" type="submit" name="register" value="Iniciar Sesión">

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
</div>
<script src="https://kit.fontawesome.com/5567fc9696.js" crossorigin="anonymous"></script>
</body>
</html>