<?php
class zona {
    public $IDZona;
    public $NombreZona;

    public function __construct($IDZona, $NombreZona) {
        $this->IDZona = $IDZona;
        $this->NombreZona = $NombreZona;
    }

    // Getter para IDZona
    public function getIDZona() {
        return $this->IDZona;
    }

    // Setter para IDZona
    public function setIDZona($IDZona) {
        $this->IDZona = $IDZona;
    }

    // Getter para NombreZona
    public function getNombreZona() {
        return $this->NombreZona;
    }

    // Setter para NombreZona
    public function setNombreZona($NombreZona) {
        $this->NombreZona = $NombreZona;
    }
}
?>