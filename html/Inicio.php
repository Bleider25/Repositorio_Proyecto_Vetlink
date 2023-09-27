<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VetLink</title>
        <link rel="icon" href="img/icons/Logo1.png">
        
        <!--Link a la fuente=================-->
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

        <link rel="icon" href="../img/icons/Logo1.png" type="image/x-icon">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!--Link al bootstrap=================-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../css/inicio.css" rel="stylesheet">
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
                              <a class="nav-link active" href="#categorias">Categorias</a>
                          </li>
                          <?php
                          
                          if (isset($_SESSION['usuario'])) {
                              // si ha iniciado sesion muestra el nombre
                              echo '<li class="nav-item">';
                              echo '<span class="nav-link active">Bienvenido, ' . $_SESSION['usuario'] . '</span>';
                              echo '</li>';
                          } else {
                              // si no ha iniciado, muestra el link al login
                              echo '<li class="nav-item">';
                              echo '<a class="nav-link active" href="../php/login.php">Iniciar Sesión</a>';
                              echo '</li>';
                          }
                          ?>
                      </ul>
                  </div>
              </div>
          </nav>
      </header>
        <!--Aqui empieza el slider-->
        <div id="carouselExampleInterval" class="carousel slide carousel-space" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../img/Slider/1.png" class="carousel-img img-fluid">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../img/Slider/2.png" class="carousel-img img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="../img/Slider/3.png" class="carousel-img img-fluid">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--Producto destacado-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../img/producto/1.png" class="img-fluid rounded-start .card-img-top">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">producto destacado</h5>
                                <p class="card-text">$0000</p>
                                <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eos voluptatibus inventore ratione veniam alias modi reprehenderit. Quaerat, ut nulla dolores placeat itaque possimus totam asperiores incidunt ipsam eaque ducimus.</small></p>
                                <a href="#" class="btn btn-color">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--productos-->
    
        <?php
require("../php/conexion.php");
$query = mysqli_query($conexion, "SELECT * FROM productos");
$sql = mysqli_num_rows($query);
$contador = 0;

if ($sql > 0) {
    echo '<div class="container carousel-space">';
    echo '<div class="row">';

    while ($resultado = mysqli_fetch_array($query)) {
        if ($contador >= 8) {
            break; // Salir del bucle después de mostrar 8 productos
        }

        echo '<div class="col-md-3 col-sm-4 col-6">';
        echo '<div class="card">';
        echo '<img src="data:imagen/jpg;base64,' . base64_encode($resultado["imagen_p"]) . '" alt="Imagen">';
        echo '<a href="#" class="car-img-top"></a>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $resultado["nombre_p"] . '</h5>';
        echo '<p class="card-text" href="#">' . $resultado["precio_p"] . '</p>';
        echo '<div class="w-100 btn-group">';
        echo '<a href="#" class="btn btn-color"><img src="../img/icons/add-to-cart.png" alt=""></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        $contador++;
    }

    echo '</div>';
    echo '</div>';
}
?>
              
        <!--Categorias-->
        <section id="categorias" class="text-center">
          <div class="container">
              <h2 class="Tcate">Categorias</h2>
              <div class="row justify-content-center">
                  <div class="col-md-6 col-sm-6 col-lg-3 mb-1" data-aos="fade-up">
                    <a class="btn btn-color square-btn btn-custom-width" href="categorias.html" role="button">Juguetería</a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-3 mb-1" data-aos="fade-up">
                      <a class="btn btn-color square-btn btn-custom-width" href="categorias.html" role="button">Accesorios</a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-3 mb-1" data-aos="fade-up">
                      <a class="btn btn-color square-btn btn-custom-width" href="categorias.html" role="button">Salud y Bienestar</a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-3 mb-3" data-aos="fade-up">
                      <a class="btn btn-color square-btn btn-custom-width" href="categorias.html" role="button">Alimentos</a>
                  </div>
              </div>
          </div>
      </section>
    <footer class="bg-dark text-light pt-5 pb-4">
    <div class="cotainer text-center text-md-start">
      <div class="row no-gutters text-center text-md-start">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="footer-h5 text-uppercase mb-4 font-weight-bold ">Nosotros</h5>
          <hr class="mb-4">
          <p>
            Nuestra tienda es un lugar donde los amantes de las mascotas pueden encontrar todo lo que necesitan para el
            cuidado y la felicidad de sus compañeros peludos. Desde perros y gatos y, pronto, hasta aves exóticas y
            pequeños roedores, estamos aquí para ser tu destino de confianza.
          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">contacto</h5>
          <hr class="mb-4">
          <p>
            <li class="fas fa-home me-3"></li>Medellin, Antioquia
          </p>
          <p>
            <li class="fas fa-envelope me-3"></li>Vetlink@gmail.com
          </p>
          <p>
            <li class="fas fa-phone me-3"></li>+57 300 000 0000
          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Documentos</h5>
          <hr class="mb-4">
          <p>
            <a href="https://drive.google.com/file/d/1xTiYhTJNChcTCdDMfoovM_F6SStxKVeN/view?usp=sharing" class="text-light"><img src="../img/icons/manual.png" alt="">Manual de usario</a>
          </p>
          <p>
            <a href="https://drive.google.com/file/d/1DVMNe_t5RxfUjPSLiZRzJ9_O5cYU2_GO/view?usp=drive_link" class="text-light"><img src="../img/icons/manual.png" alt="">Terminos y condiciones</a>
          </p>
          <p>

          </p>
          <p>

          </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <img class="animation-pet" src="../img/icons/dog.png" >
        </div>


        <hr class="mb-4">
        <div class="text-center mb-2">
          <p>
            <i class="fa-regular fa-copyright" style="color: #ffffff;"></i> Todos los derechos reservados
          </p>
        </div>
        <div class="text-center">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="#" class="text-light">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-light">
                <i class="fab fa-x-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-light">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-light">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
    </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/5567fc9696.js" crossorigin="anonymous"></script>
    <script>AOS.init();</script>
</html>