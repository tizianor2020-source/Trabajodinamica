<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista productos</title>
</head>

<?php


include "conexion.php";


$resultado = mysqli_query($conn, "select stock, productos.id_producto, productos.nombre_producto, productos.precio, productos.pais_origen,  zonas.nombre_zona from producto_por_zona join productos on producto_por_zona.id_producto =productos.id_producto join zonas on producto_por_zona.id_zona = zonas.id_zona;");
$productos=[];
if ($resultado) {
    while ($producto = mysqli_fetch_assoc($resultado) ) {
        $productos [] = $producto;
    }
}

?>





<body>

<table border="1" cellpadding="5" cellspacing="0">
<thead>

    <tr><th>Nombre</th><th>Precio</th><th>Pais de origen</th><th>Zona</th><th>Stock</th><th>Modificar Producto</th></tr>
</thead>
    <?php foreach ($productos as $producto){ ?>
    <tr><td>
        <?php echo
        htmlspecialchars($producto['nombre_producto']); ?>
    </td>
    <td>
        <?php echo
        htmlspecialchars($producto['precio']); ?>
    </td>
    <td>
        <?php echo
        htmlspecialchars($producto['pais_origen']); ?>
    </td>
    <td><?php echo
        htmlspecialchars($producto['nombre_zona']); ?>
    </td>
    <td><?php echo
        htmlspecialchars($producto['stock']); ?>
    </td>




    <td>
        <a href="modificacion.php?id=<?php echo $producto['id_producto'];?>">Modificar producto</a>
         <a href="eliminar.php?id=<?php echo $producto['id_producto']; ?>" onclick="return confirm ('¿seguro que deseas eliminar este producto?')
        ;">Eliminar</a>

</td>
</tr>
    <?php } ?>


</table>

    
</body>
</html>