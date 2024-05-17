<?php
require_once '../Controlador/Controlador_zona.php';
$controlador = new ControladorZona();
$zonas = $controlador->mostrarZonas();
$sucursales = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnZona']) || isset($_POST['btnSucursal'])) {
        $sucursales = $controlador->manejarSeleccion();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dropdown Interactivo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
<link rel="stylesheet" href="../Estilos/Estilo_GUI_Sucursal.css">
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
                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Ubicacion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#" onclick="GUIFachada.CargarPaginaPrincipal()">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#" onclick="GUIFachada.CargarPaginaSucursal()">Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#" onclick="GUIFachada.CargarPaginaSucursal()">Alimentos</a>
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


<div class="container_sucursal">
    <div class="row">
        <div class="col-md-6">
            <!-- Cuadro seleccion sucursal -->
            <div class="text-center">
                <h1 class="display-5 mb-5">Selecciona tu cine más cercano</h1>
            </div>
            <form method="post" action="">
                <h1 class="display-4 mb-2">Selecciona la zona</h1>
                <div class="input-group mb-3">
                    <select class="form-select border-primary p-2" aria-label="Default select example" name="zonaSeleccionada" id="zona">
                        <option value="">Seleccione una Zona</option>
                        <?php foreach ($zonas as $zona): ?>
                            <option value="<?php echo $zona->getIDZona(); ?>" <?php echo isset($_POST['zonaSeleccionada']) && $_POST['zonaSeleccionada'] == $zona->getIDZona() ? 'selected' : ''; ?>>
                                <?php echo $zona->getNombreZona(); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button class="btn btn-primary" type="submit" name="btnZona">Seleccionar</button>
                </div>
                <?php if (!empty($sucursales)): ?>
                    <h1 class="display-4 mb-2">Selecciona la sucursal</h1>
                    <div class="input-group mb-3">
                        <select class="form-select border-primary p-2" aria-label="Default select example" name="sucursalSeleccionada" id="sucursal">
                            <?php foreach ($sucursales as $sucursal): ?>
                                <option value="<?php echo $sucursal->getIDSucursal(); ?>" <?php echo isset($_POST['sucursalSeleccionada']) && $_POST['sucursalSeleccionada'] == $sucursal->getIDSucursal() ? 'selected' : ''; ?>>
                                    <?php echo $sucursal->getNombreSucursal(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <button class="btn btn-primary" type="submit" name="btnSucursal">Seleccionar</button>
                    </div>
                <?php endif; ?>
            </form>
        </div>
        <div class="col-md-6">
            <div class="img-container">
                <img src="../Imagenes/Imagenes_GUI_Sucursal/icono.png" alt="Imagen Grande" class="img-fluid">
            </div>
        </div>
    </div>
</div>


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
 <!--Bootstrap Js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <script src="../Controlador/Fachada_GUI.js"></script>
</body>
</html>