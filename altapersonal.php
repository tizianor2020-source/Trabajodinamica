<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include "conexion.php";


if( $_SERVER["REQUEST_METHOD"]==="POST"){

$nombre_personal=$_POST['nombre_personal'];
$dni=$_POST['dni'];

if( !empty($nombre_personal)  && !empty($dni)){
    //mysqli_query($conn,"insert into personal (nombre_personal, dni) values ('$nombre_personal','$dni')");
    $stmt = $conn->prepare("INSERT INTO personal (nombre_personal, dni ) VALUES (?, ?)");
$stmt->bind_param("si", $nombre_personal, $dni);
$stmt->execute();
$stmt->close();
}
    else{
        echo "Falta completar";
    }
}




?>
<body>
    <h2>personal</h2>
    <form action="" method="POST">

        <label for="nombre_personal">Nombre personal</label><br>
        <input type="text" id="nombre_personal" name="nombre_personal"><br><br>

         <label for="dni">dni</label><br>
        <input type="number" id="dni" name="dni"><br><br>

        <input type="submit" value="enviar">

    </form>
</body>





</html>
