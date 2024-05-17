<?php
require_once '../Servicios/BD_Cine/proxy_zona.php';
require_once 'zona.php';
require_once 'sucursal.php';

class GestorZona{
    private $proxy;

    public function __construct() {
        $this->proxy = ProxySucursalZona::obtenerProxy();
    }

    public function obtenerZonas(){
        $datos = $this->proxy->obtenerDatosDeZonas();
        $zonas = [];
        foreach ($datos as $dato){
            $zonas[] = new Zona($dato['IDZona'], $dato['NombreZona']);
        }
        return $zonas;
    }

    public function obtenerSucursales(){
        $datos = $this->proxy->obtenerDatosDeSucursales();
        $sucursales = [];
        foreach ($datos as $dato){
            $sucursales[] = new Sucursal($dato['IDSucursal'], $dato['IDZona'], $dato['NombreSucursal']);
        }
        return $sucursales;
    }
}
