<?php

include("Conexion.php");
$con = conectar();

$id = $_GET["id"];

$sql = "SELECT FROM carros WHERE cod_carro ='$id'";
$query = mysqli_query($con, $sql);

//$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form action="Update.php" method="POST">

            <input type="hidden" name="cod_carro" value="<?php echo $row['cod_carro']  ?>">

            <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca" value="<?php echo $row['Marca']?>">
            <input type="text" class="form-control mb-3" name="Modelo" placeholder="Modelo">
            <input type="text" class="form-control mb-3" name="Placa" placeholder="Placa"  >
            <input type="text" class="form-control mb-3" name="Color" placeholder="Color" >

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>