<?php
include "conexion.php";


if( $_SERVER["REQUEST_METHOD"]==="POST"){



$id_producto=$_POST['id_producto'];
$id_zona=$_POST['id_zona'];
$id_tipo_producto=$_POST['id_tipo_producto'];


if(  !empty($id_producto) && !empty($id_zona) && !empty($id_tipo_producto) ){
    mysqli_query($conn, "INSERT INTO  producto_por_zona(id_producto, id_zona, id_tipo_producto)values('$id_producto','$id_zona','$id_tipo_producto');");
    
}else{
    echo "<script>
    alert('Campos vacios')
     windows.history.back((;
     </script>";
}
}

$resultado = mysqli_query($conn, "SELECT * FROM productos");
$id_productos=[];
if ($resultado) {
    while ($producto = mysqli_fetch_assoc($resultado) ) {
        $productos [] = $producto;
    }
}

$resultado=mysqli_query($conn, "SELECT * from tipo_producto;");
$id_tipo_producto=[];
if ($resultado) {
    while ($tipo_producto = mysqli_fetch_assoc($resultado) ) {
        $id_tipo_productos [] = $tipo_producto ;
    }
}




$resul=mysqli_query($conn, "SELECT * from zonas;");
$zonas=[];
if ($resul) {
    while ($zona= mysqli_fetch_assoc($resul) ) {
        $zonas [] = $zona;
    }
}


?>


<body>

<form METHOD="POST">
<select name="id_producto" id="id_producto">
    <option value="">Seleccione un producto </option>
    
    <?php foreach ($productos as $producto){ ?>
        <option value="<?php echo
        htmlspecialchars($producto['id_producto']); ?>">
        <?php echo htmlspecialchars($producto['nombre_producto']); ?>
    </option>
    <?php } ?>
    </select>



    <form METHOD="POST">
<select name="id_tipo_producto" id="id_tipo_producto">
    <option value="">Seleccione un tipo de producto </option>
    
    <?php foreach ($id_tipo_productos as $tipo_producto){ ?>
        <option value="<?php echo
        htmlspecialchars($tipo_producto['id_tipo_producto']); ?>">
        <?php echo htmlspecialchars($tipo_producto['nombre_tipo_producto']); ?>
    </option>
    <?php } ?>
    </select>




    <select name="id_zona" id="id_zona">
    <option value="">Seleccione una zona</option>
    
    <?php foreach ($zonas as $zona){ ?>
        <option value="<?php echo
        htmlspecialchars($zona['id_zona']); ?>">
        <?php echo htmlspecialchars($zona['nombre_zona']); ?>
    </option>
    <?php } ?>
    </select><br><br>

<input type="submit" value="Enviar">
    </form>


    
</body>
</html>
