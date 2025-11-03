<?php
include "conexion.php";

$id = $_GET['id'];


$resultado = mysqli_query($conn, "SELECT id_producto,nombre_producto,precio,pais_origen  FROM productos WHERE id_producto = $id");
$productos = mysqli_fetch_assoc($resultado);

if( $_SERVER['REQUEST_METHOD']==='POST') {
    $nombre_producto=$_POST['nombre_producto'];
    $precio=$_POST['precio'];
    $pais_origen=$_POST['pais_origen'];


    $stmt = $conn->prepare("UPDATE productos SET nombre_producto=?, precio=?, pais_origen=? WHERE id_producto=?");
$stmt->bind_param("sisi", $nombre_producto, $precio, $pais_origen, $id);

$stmt->execute();
$stmt->close();




header("Location: listarproductos.php");
exit;



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
</head>
<body>
    <h2>Editar producto</h2>
    <form method="POST">
        Nombre del producto:<input type="text" name="nombre_producto" value="<?php echo $productos['nombre_producto']; ?>"><br>
        Precio:<input type="number" name="precio" value="<?php echo $productos['precio']; ?>"><br>
        Pais de origen:<input type="text" name="pais_origen" value="<?php echo $productos['pais_origen']; ?>"><br>
        <button type="sumbit">Guardar Cambios</button>
    </form>
    
</body>
</html>