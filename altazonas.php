<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include "conexion.php";


if( $_SERVER["REQUEST_METHOD"]==="POST"){

$nombre_zona=$_POST['nombre_zona'];

if( !empty($nombre_zona)){
    //mysqli_query($conn,"insert into zonas (nombre_zona) values ('$nombre_zona')");
    $stmt = $conn->prepare("INSERT INTO zonas (nombre_zona) VALUES (?)");
$stmt->bind_param("s", $nombre_zona);
$stmt->execute();
$stmt->close();
}
    else{
        echo "Falta completar";
    }
}



?>
<body>
    <h2>Zonas</h2>
    <form action="" method="POST">

        <label for="nombre_zona">zona</label><br>
        <input type="text" id="nombre_zona" name="nombre_zona"><br><br>

        <input type="submit" value="enviar">

    </form>
</body>





</html>