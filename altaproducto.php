<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include "conexion.php";


if( $_SERVER["REQUEST_METHOD"]==="POST"){

$nombre_producto=$_POST['nombre_producto'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$pais_origen=$_POST['pais_origen'];

if( !empty($nombre_producto) && !empty($precio) && !empty($stock) && !empty($pais_origen)){
 //   mysqli_query($conn,"insert into productos (nombre_producto, precio, stock, pais_origen) values ('$nombre_producto','$precio','$stock','$pais_origen')");
$stmt = $conn->prepare("INSERT INTO productos (nombre_producto, precio, stock, pais_origen) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siis", $nombre_producto, $precio,  $stock, $pais_origen);
$stmt->execute();
$stmt->close();
}
    else{
        echo "Falta completar";
    }
}





?>
<body>
    <h2>Producto</h2>
    <form action="" method="POST">

        <label for="nombre_producto">Nombre mercaderia</label><br>
        <input type="text" id="nombre_producto" name="nombre_producto"><br><br>

         <label for="precio">Precio</label><br>
        <input type="number" id="precio" name="precio"><br><br>

         <label for="stock">Stock</label><br>
        <input type="number" id="stock" name="stock"><br><br>

        <label for="pais_origen">Pais de origen</label><br>
        <input type="text" id="pais_origen" name="pais_origen"><br><br>


        <input type="submit" value="enviar">

    </form>
</body>





</html>
