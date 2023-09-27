<?php

require_once('conexion.php');
$id = $_GET['id'];

$sql = "SELECT nombre_p, descripcion_p,precio_p,imagen_p FROM productos WHERE id_producto = '$id'";
$consulta = mysqli_query($conexion,$sql);
$resultado = mysqli_fetch_row($consulta);

//var_dump($resultado);
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
	<link href="../css/crud/editarprod.css" rel="stylesheet">
	<link rel="icon" href="../img/icons/Logo1.png" type="image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav navbar-outline-none">
            <div class="container-fluid">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="../img/icons/Logo2.png" alt="" width="30" height="30" class="d-inline-block align-text-center">Vetlink</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="text-light" href="../php/login.php">Cierre de sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

		<div class="row">
			<div class="col">
				<form action="../php/actualizar_producto.php" method="post" enctype="multipart/form-data">
					<h1 class="text-center">Actualizar productos</h1>

					<div class="row justify-content-center mt-3">
						<div class="col-4">
							<input class="form-control"   type="text" name="id_producto" placeholder="ID del producto" value="<?php echo $id ?>">
						</div>
					</div>
					<div class="row justify-content-center mt-3">
						<div class="col-4">
							<input class="form-control" type="text" name="nombre_p" placeholder="Nombre del producto" value="<?php echo $resultado[0];?>">
						</div>
					</div>

					<div class="row justify-content-center mt-3">
						<div class="col-4">
							<textarea class="form-control" name="descripcion_p" placeholder="Descripció" value=""><?php echo $resultado[1];?></textarea>
						</div>
					</div>

					<div class="row justify-content-center mt-3">
						<div class="col-4">
							<input class="form-control" type="number" name="precio" placeholder="Precio" value="<?php echo $resultado[2]?>">
						</div>
					</div>

					<div class="row justify-content-center mt-3">
    					<div class="col-4">
        					<input class="form-control" type="file" name="imagen">
    					</div>
					</div>

					<div class="row justify-content-center mt-3">
						<div class="col-4">
							<button type="submit" class="form-control btn-custom1">Actualizar</button>
						</div>
					</div>

					<div class="row justify-content-center mt-3 text-center">
						<div class="col-4 ">
							<a class="btn btn-custom" href="../html/admin_productos.php">Regresar</a>
						</div>
					</div>



				</form>
				<br><br>

			
			</div>
		</div>
		<div class="row mt-7">
				<div class="col-12">
					<footer class="text-center">
						<p>&copy; Derechos reservados</p>
					</footer>
				</div>
		</div>
	<script src="https://kit.fontawesome.com/5567fc9696.js" crossorigin="anonymous"></script>
</body>
</html>