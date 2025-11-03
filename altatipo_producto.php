<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include "conexion.php";


if( $_SERVER["REQUEST_METHOD"]==="POST"){

$nombre_tipo_producto=$_POST['nombre_tipo_producto'];

if( !empty($nombre_tipo_producto) ){
 //   mysqli_query($conn,"insert into productos (nombre_producto, precio, stock, pais_origen) values ('$nombre_producto','$precio','$stock','$pais_origen')");
$stmt = $conn->prepare("INSERT INTO tipo_producto (nombre_tipo_producto) VALUES (?)");
$stmt->bind_param("s", $nombre_tipo_producto);
$stmt->execute();
$stmt->close();
}
    else{
        echo "Falta completar";
    }
}





?>
<body>
    <h2>Tipo producto</h2>
    <form action="" method="POST">

        <label for="nombre_tipo_producto">Nombre tipo producto</label><br>
        <input type="text" id="nombre_tipo_producto" name="nombre_tipo_producto"><br><br>

         

        <input type="submit" value="enviar">

    </form>
</body>





</html>
