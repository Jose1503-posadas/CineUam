<?php
// método GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    if(isset($_GET['promocion'])) {
        // Obtener la promoción 
        $promocion = $_GET['promocion'];

        // muestra el resultado
        switch ($promocion) {
            case 1:
                echo "¡Compra una entrada y obtén otra gratis!";
                break;
            case 2:
                echo "¡Combo por $100!";
                break;
            case 3:
                echo "¡Ya tienes tu descuento del 20% en entradas!";
                break;
            default:
                echo "Promoción no válida";
                break;
        }
    } else {
        echo "Por favor seleccione una promoción.";
    }
}
?>
