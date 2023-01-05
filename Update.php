<?php
    include('Conexion.php');
    $con = conectar();

$cod_carro = $_POST['cod_carro'];
$Marca = $_POST['Marca'];
$Modelo = $_POST['Modelo'];
$Placa = $_POST['Placa'];
$Color = $_POST['Color'];

$sql = "UPDATE carros SET Marca =['$Marca'], Modelo ='$Modelo', Placa ='$Placa', Color ='$Color' WHERE cod_carro = '$cod_carro' ";
$query = mysqli_query($con, $sql);

    if($query){
        Header('Location: index.php');
    }

?>