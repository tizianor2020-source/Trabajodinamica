<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista personal</title>
</head>

<?php


include "conexion.php";


$resultado = mysqli_query($conn, "select  personal.id_personal, personal.nombre_personal, personal.dni,  zonas.nombre_zona from personal_por_zona join personal on personal_por_zona.id_personal =personal.id_personal join zonas on personal_por_zona.id_zona = zonas.id_zona;");
$personal=[];
if ($resultado) {
    while ($personal = mysqli_fetch_assoc($resultado) ) {
        $personales [] = $personal;
    }
}

?>





<body>

<table border="1" cellpadding="5" cellspacing="0">
<thead>

    <tr><th>Nombre</th><th>Dni</th><th>Zona</th><th>Modificar personal</th></tr>
</thead>
    <?php foreach ($personales as $personal){ ?>
    <tr><td>
        <?php echo
        htmlspecialchars($personal['nombre_personal']); ?>
    </td>
    <td>
        <?php echo
        htmlspecialchars($personal['dni']); ?>
    </td>
    <td>
        <?php echo
        htmlspecialchars($personal['nombre_zona']); ?>
    </td>
    



    <td>
        <a href="modificacionp.php?id=<?php echo $personal['id_personal'];?>">Modificar personal</a>
         <a href="eliminarp.php?id=<?php echo $personal['id_personal']; ?>" onclick="return confirm ('¿seguro que deseas eliminar este personal?')
        ;">Eliminar</a>

</td>
</tr>
    <?php } ?>


</table>

    
</body>
</html>