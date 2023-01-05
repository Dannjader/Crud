<?php

include("Conexion.php");
$con = conectar();

$cod_carro = $_GET["id"];

$sql = "DELETE FROM carros WHERE cod_carro = '$cod_carro'";
$query = mysqli_query($con, $sql);

if($query){
    HEADER("Location: index.php");
}

?>