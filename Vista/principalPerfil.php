
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine UAM</title>
    <!--Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link href="../Estilos/Estilo_GUI_principal.css" rel="stylesheet"> 
</head>
<body>
    <!--NavBar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">🍿CineUAM</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">🍿CineUAM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link mx-lg-2 active" aria-current="page" href="#">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" data-page="peliculas">Peliculas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" data-page="alimentos">Alimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="peliculas.php">Ubicacion</a>
                </li>
                </ul>
            </div>
            </div>
            <!--<a href="peliculas.php" class="login-button">Login</a>-->
            <a class="login-button" href="#" onclick="GUIFachada.cargarPaginaLogin()">Perfil</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!--End Navbar-->
    <!--Carrusel-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active d-item">
        <img src="../Imagenes/Imagenes_Gui_principal/Carrusel/Disfruta.jpeg" class="d-block w-100 d-img" alt="slider 1">
        <div class="carousel-caption d-none d-md-block">
            <h5>Cine UAM es todo lo que necesitas y mas...</h5>
            <p>"Sumérgete en la magia del cine: donde los sueños cobran vida."</p>
        </div>
        </div>
        <div class="carousel-item d-item">
        <img src="../Imagenes/Imagenes_Gui_principal/Carrusel/Disney.jpeg" class="d-block w-100" alt="slide 2">
        <div class="carousel-caption d-none d-md-block">
            <h5>Vive momentos en familia</h5>
            <p>"La imaginación no tiene edad, y los sueños son para siempre"</p>
        </div>
        </div>
        <div class="carousel-item d-item">
        <img src="../Imagenes/Imagenes_Gui_principal/Carrusel/pal.jpeg" class="d-block w-100" alt="slide 3">
        <div class="carousel-caption d-none d-md-block">
            <h5>Acompaña tu visita!</h5>
            <p>Palomitas, refrescos y golosinas: el trío perfecto para una tarde de cine inolvidable..</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container  ">

        <div class="row">
            <div class="col-md-6 ">
            <div class="img-box">
                <img src="../Imagenes/Imagenes_Gui_principal/Palomitas.png" alt="">
            </div>
            </div>
            <div class="col-md-6">
            <div class="detail-box">
                <div class="heading_container">
                <h2>
                    Menu tradicional
                </h2>
                </div>
                <p>
                Disfruta de todos los alimentos y bebidas que tanto te encantan
                para vivir al maximo tu experiencia en nuestras salas.
                </p>
                <a href="">
                Comprar
                </a>
            </div>
            </div>
        </div>
        </div>
    </section>

  <!-- end about section -->
    <!-- Footer -->
    <footer class="footer">
        <!-- Section: Social media -->
        <section class="social-media">
            <div class="social-media-content">
                <span>Mantente conectado a nosotros en nuestras redes sociales:</span>
            </div>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="footer-links">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <h6>🍿CineUAM</h6>
                        <hr class="footer-hr">
                        <p>"Sumérgete en la magia del cine: donde los sueños cobran vida."</p>
                    </div>
                    <div class="col-md-2 ">
                        <h6>Mejora tu experiencia</h6>
                        <hr class="footer-hr">
                        <p><a href="#!" class="footer-link">Sugerencias</a></p>
                        <p><a href="#!" class="footer-link">Comentarios</a></p>
                        <p><a href="#!" class="footer-link">Ayuda</a></p>
                    </div>
                    <div class="col-md-4 ">
                        <h6>Contactanos!</h6>
                        <hr class="footer-hr">
                        <p><i class="fas fa-home mr-3"></i> CDMX, UAMcita #1230, México</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@CineUAM.com</p>
                        <p><i class="fas fa-phone mr-3"></i> 55 232 567 88</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="copyright">
            © 2024 Copyright:
            <a href="index.php" class="footer-link">CineUAM</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <!-- End of .container -->
     <!--Bootstrap Js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="../Controlador/Fachada_GUI.js"></script>
    
    
</body>
</html>