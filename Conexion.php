<?php

// Funcion que concta a la base de datos
function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "parqueadero";

    $con = mysqli_connect($host, $user, $pass);

    mysqli_select_db($con, $bd);

    return $con;
}
?>