<?php
// método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precios = array(
        "Palomitas" => 50,
        "Refresco" => 30,
        "Chocolates" => 20
    );
    $total = 0; // contador para la cuenta

    foreach ($_POST['productos'] as $producto) {
        $total += $precios[$producto];
    }
    //sacar la cuenta
    $total *= $_POST['cantidad'];

    // mostrar total 
    echo "El total de la cuenta es: $" . $total;
}
?>
