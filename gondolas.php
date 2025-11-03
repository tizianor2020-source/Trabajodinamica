<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gondolas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include "conexion.php";


if( $_SERVER["REQUEST_METHOD"]=="POST"){


$tipo_mercaderia=$_POST['tipo_mercaderia'];
$pasillo=$_POST['pasillo'];

if( !empty($tipo_material) && !empty($unidad) && !empty($url) && !empty($materia) ){
    mysqli_query($conn, "insert into gondolas (tipo_material, unidad ,url, id_materia) values ('$tipo_material','$unidad','$url','$materia')");
}
    else{
        echo "Falta completar";
    }
}


$resultado = mysqli_query($conn, "SELECT * FROM mercaaderia ");
$id_mercaderia=[];
if ($resultado) {
    while ($mercaderia = mysqli_fetch_assoc($resultado) ) {
        $id_mercaderia [] = $mercaderia;
    }
}


?>
<body>
    <h2>Materiales</h2>
    <form action="" method="post">

        <label for="tipo_material">Ingrese pasillo</label><br>
        <input type="text" id="tipo_material" name="tipo_material"><br><br>

         <select name="materia" id="materia">
     <option value="">Seleccione el tipo mercaderia </option>
    
    <?php foreach ($id_mercaderia as $mercaderia){ ?>
        <option value="<?php echo
        htmlspecialchars($materia['id_materia']); ?>">
        <?php echo htmlspecialchars($materia['nombre_materia']); ?>
    </option>
    <?php } ?>
    </select>


        <input type="submit" value="enviar">

    </form>
</body>





</html>
