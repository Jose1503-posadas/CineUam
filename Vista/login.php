<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>CodePen - Login Form - Modal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'><link rel="stylesheet" href="../Estilos/Estilo_GUI_Login.css">
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
                    <a class="nav-link mx-lg-2" href="index.php">Ubicacion</a>
                </li>
                </ul>
            </div>
            </div>
            <!--<a href="peliculas.php" class="login-button">Login</a>-->
            <a class="login-button" href="#" onclick="GUIFachada.cargarPaginaLogin()">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!--End Navbar-->
<!-- partial:index.partial.html -->
<!-- Form-->
<div class="form">
<div class="form-toggle"></div>
<div class="form-panel one">
<div class="form-header">
<h1>Ingresa a tu cuenta!</h1>
</div>
<div class="form-content">
<form>
<div class="form-group">
<label for="username">Nombre de usuario</label>
<input type="text" id="username" name="username" required="required"/>
</div>
<div class="form-group">
<label for="password">Contraseña</label>
<input type="password" id="password" name="password" required="required"/>
</div>
<div class="form-group">
<button type="submit">Iniciar sesion</button>
</div>
</form>
</div>
</div>
<div class="form-panel two">
<div class="form-header">
<h1>Registrar cuenta</h1>
</div>
<div class="form-content">
<form>
<div class="form-group">
<label for="username">Usuario</label>
<input type="text" id="username" name="username" required="required"/>
</div>
<div class="form-group">
<label for="password"></label>
<input type="password" id="password" name="password" required="required"/>
</div>
<div class="form-group">
<label for="cpassword">Confirm Password</label>
<input type="password" id="cpassword" name="cpassword" required="required"/>
</div>
<div class="form-group">
<label for="email">Email Address</label>
<input type="email" id="email" name="email" required="required"/>
</div>
<div class="form-group">
<button type="submit">Register</button>
</div>
</form>
</div>
</div>
</div>
<!-- partial -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../Controlador/Fachada_GUI.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script src="../Controlador/GUI_Autenticacion.js"></script>
</body>
</html>
