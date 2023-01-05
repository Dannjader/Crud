<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM carros";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col md-3">

                <h1>Ingrese Datos</h1>

                <form action="insert.php" method="POST">

                    <input type="text" class="form-control col-md-3" name="cod_carro " placeholder="Codigo Carro"><br>
                    <input type="text" class="form-control col-md-3" name="Marca" placeholder="Marca"><br>
                    <input type="text" class="form-control col-md-3" name="Modelo" placeholder="Modelo"><br>
                    <input type="text" class="form-control col-md-3" name="Placa" placeholder="Placa"><br>
                    <input type="text" class="form-control col-md-3" name="Color" placeholder="Color"><br>

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="content">
                        <tr class="">
                            <th>CODIGO</th>
                            <th>MARCA</th>
                            <th>MODELO</th>
                            <th>PlACA</th>
                            <th>COLOR</th>
                            <th></th>
                            <th></th>
                        </tr>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $row["cod_carro"] ?></th>
                                <th><?php echo $row["Marca"] ?></th>
                                <th><?php echo $row["Modelo"] ?></th>
                                <th><?php echo $row["Placa"] ?></th>
                                <th><?php echo $row["Color"] ?></th>
                                <th><a href="Actualizar.php? id=<?php echo $row["cod_carro"]?>"class="btn btn-info">Editar</a></th>
                                <th><a href="Delete.php? id=<?php echo $row["cod_carro"]?>"class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>

</html>