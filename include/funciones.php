<?php

function obtener_servicios(){
    try{

        //importar las creenciales

        require 'database.php';


        //Consulta a SQL

        $sql ="SELECT * FROM usuarios;";
        //Realizar la consulta

        $consulta = mysqli_query($db,$sql);
        //Acceder a los resultados

        
        //var_dump(mysqli_fetch_all($consulta));

     

        //Cerrar la conexion


    } catch(\Throwable $th) {
        //var_dump($th);
    }
}

obtener_servicios();