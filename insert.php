<?php

include("Conexion.php");
$con = conectar();

$cod_carro = $_POST["cod_carro"];
$Marca = $_POST["Marca"];
$Modelo = $_POST["Modelo"];
$Placa = $_POST["Placa"];
$Color = $_POST["Color"];

$sql = "INSERT INTO carros VALUES('$cod_carro','$Marca', '$Modelo','$Placa','$Color')";
$query = mysqli_query($con, $sql);


if ($query){
    Header("Location: index.php");
}else{

}
?>