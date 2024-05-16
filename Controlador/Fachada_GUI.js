// Fachada para manejar la interfaz de usuario
var GUIFachada = (function() {
    // Método privado para cargar la página de login
    function cargarPaginaLogin() {
        window.location.href = "../Vista/login.php";
    }

    // Método público para iniciar sesión
    function CargarPaginaPrincipal() {
        window.location.href = "../Vista/index.php";
    }

    // Método público para cargar GUI sucursal
    function CargarPaginaSucursal() {
        window.location.href = "../Vista/sucursal.php";
    }

    // Método público para cerrar sesión
    function cerrarSesion() {
        cargarPaginaLogin();
    }

    // Devolver métodos públicos
    return {
        cargarPaginaLogin: cargarPaginaLogin,
        CargarPaginaPrincipal: CargarPaginaPrincipal,
        CargarPaginaSucursal: CargarPaginaSucursal,
        cerrarSesion: cerrarSesion
    };
})();
