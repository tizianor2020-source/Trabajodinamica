<?php
include "conexion.php";

$id = $_GET['id'];


$resultado = mysqli_query($conn, "SELECT id_personal,nombre_personal,dni  FROM personal WHERE id_personal = $id");
$personal = mysqli_fetch_assoc($resultado);

if( $_SERVER['REQUEST_METHOD']==='POST') {
    $nombre_personal=$_POST['nombre_personal'];
    


    $stmt = $conn->prepare("UPDATE personal SET nombre_personal=?, dni=? WHERE id_personal=?");
$stmt->bind_param("sii", $nombre_personal, $dni, $id);

$stmt->execute();
$stmt->close();




header("Location: listarpersonal.php");
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
        Nombre del personal:<input type="text" name="nombre_personal" value="<?php echo $personal['nombre_personal']; ?>"><br>
        Dni:<input type="number" name="dni" value="<?php echo $personal['precio']; ?>"><br>
        <button type="sumbit">Guardar Cambios</button>
    </form>
    
</body>
</html>