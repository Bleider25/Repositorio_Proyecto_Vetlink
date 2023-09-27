<?php
include('../php/conexion.php');
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
    <link href="../css/crud/admin_product.css" rel="stylesheet">
    <link rel="icon" href="../img/icons/Logo1.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function confirmacion() {
            var respuesta = confirm("¿Desea realmente eliminar el registro?");
            if (respuesta == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 col-sm-12">
                    <form action="../php/registro_producto.php" method="post" enctype="multipart/form-data">
                        <h1 class="text-center">Registro de productos</h1>
                            <div class="row justify-content-center mt-3">
                                <div class="col-4">
                                    <input class="form-control" type="text" name="nombre_p" placeholder="nombre producto">
                                </div>
                            </div>

                            <div class="row justify-content-center mt-3">
                                <div class="col-4">
                                    <textarea class="form-control" name="descripcion_p" placeholder="descripcion"></textarea>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-3">
                                <div class="col-4">
                                    <input class="form-control" type="number" name="precio" placeholder="precio">
                                </div>
                            </div>

                            <div class="row justify-content-center mt-3">
                                <div class="col-4">
                                    <input class="form-control" type="file" name="imagen">
                                </div>
                            </div>

                            <div class="row justify-content-center mt-3">
                                <div class="col-auto">
                                    <button class="btn text-light" type="submit" class="form-control">Guardar</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
            <br>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-10 col-sm-12">
                        <table class="table table-striped table-centered">
                            <tr>
                                <th>nombre</th>
                                <th>descripcion</th>
                                <th>precio</th>
                                <th>imagen</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
                            </tr>

                            <?php
                            $sql = "SELECT id_producto,nombre_p,descripcion_p,precio_p,imagen_p FROM productos ";
                            $datos = mysqli_query($conexion,$sql);
                            $resultado = mysqli_fetch_all($datos,MYSQLI_ASSOC);
                            foreach ($resultado as $key) {
                                        
                            ?>
                            <tr>
                                <td><?php echo $key['nombre_p'];?></td>
                                <td><?php echo substr($key['descripcion_p'], 0, 50);?>....</td>
                                <td><?php echo $key['precio_p'];?></td>
                                <td><img src="data:image/jpeg;base64,<?php echo base64_encode($key['imagen_p'])?>" alt="" width="100" height="100"></td>
                                <td><a href="../php/editar_productos.php?id=<?php echo $key['id_producto']?> " class ="btn btn-success">Editar</a></td>
                                <td><a href="../php/eliminar_prod.php?id=<?php echo $key['id_producto']?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-10 col-sm-12">

                        <div class="row">
                            <div class="col text-center">
                                <a href="../pdf/index.php" class="btn btn-primary">Reporte PDF</a>
                            </div>
                        </div>

                        <div class="row mt-7">
                            <div class="col-12">
                                <footer class="col text-center">
                                    <p>&copy; Derechos reservados</p>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <script src="https://kit.fontawesome.com/5567fc9696.js" crossorigin="anonymous"></script>
</body>
</html>