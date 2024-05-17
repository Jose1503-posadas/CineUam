<?php
class Sucursal {
    public $IDSucursal;
    public $IDZona;
    public $NombreSucursal;

    public function __construct($IDSucursal, $IDZona, $NombreSucursal){
        $this->IDSucursal = $IDSucursal;
        $this->IDZona = $IDZona;
        $this->NombreSucursal = $NombreSucursal;
    }

    // Getter para IDSucursal
    public function getIDSucursal(){
        return $this->IDSucursal;
    }

    // Setter para IDSucursal
    public function setIDSucursal($IDSucursal){
        $this->IDSucursal = $IDSucursal;
    }

    // Getter para IDZona
    public function getIDZona(){
        return $this->IDZona;
    }

    // Setter para IDZona
    public function setIDZona($IDZona){
        $this->IDZona = $IDZona;
    }

    // Getter para NombreSucursal
    public function getNombreSucursal(){
        return $this->NombreSucursal;
    }

    // Setter para NombreSucursal
    public function setNombreSucursal($NombreSucursal){
        $this->NombreSucursal = $NombreSucursal;
    }
}
?>
