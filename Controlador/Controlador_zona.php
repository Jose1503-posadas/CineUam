<?php
require_once '../modelo/Modulo_Zona/Gestor_zona.php';


class ControladorZona {
    private $gestorZona;

    public function __construct() {
        $this->gestorZona = new GestorZona();
    }

    public function mostrarZonas() {
        return $this->gestorZona->obtenerZonas();
    }

    public function mostrarSucursalesPorZona($idZona) {
        $sucursales = $this->gestorZona->obtenerSucursales();
        $sucursalesFiltradas = array_filter($sucursales, function($sucursal) use ($idZona) {
            return $sucursal->getIDZona() == $idZona;
        });
        return $sucursalesFiltradas;
    }

    public function manejarSeleccion() {
        if (isset($_POST['zonaSeleccionada'])) {
            $idZona = $_POST['zonaSeleccionada'];
            $sucursales = $this->mostrarSucursalesPorZona($idZona);
            return $sucursales;
        }
        return [];
    }
}

?>