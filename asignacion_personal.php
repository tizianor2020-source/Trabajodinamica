<?php
include "conexion.php";


if( $_SERVER["REQUEST_METHOD"]=="POST"){



$id_personal=$_POST['id_personal'];
$id_zona=$_POST['id_zona'];
if(!empty($id_personal) && !empty($id_zona)){
    mysqli_query($conn, "insert into personal_por_zona (id_personal, id_zona) values ('$id_personal','$id_zona');");
    
}else{
    echo "<script>
    alert('Campos vacios')
     windows.history.back((;
     </script>";
}
}

$resultado=mysqli_query($conn, ("SELECT * from personal;"));
$id_personal=[];
if ($resultado) {
    while ($personal = mysqli_fetch_assoc($resultado) ) {
        $personales [] = $personal;
    }
}



$resul=mysqli_query($conn, ("SELECT * from zonas;"));
$zonas=[];
if ($resultado) {
    while ($zona= mysqli_fetch_assoc($resul) ) {
        $zonas [] = $zona;
    }
}


?>


<body>

<form METHOD="POST">
<select name="id_personal" id="id_personal">
    <option value="">Seleccione un personal </option>
    
    <?php foreach ($personales as $personal){ ?>
        <option value="<?php echo
        htmlspecialchars($personal['id_personal']); ?>">
        <?php echo htmlspecialchars($personal['nombre_personal']); ?>
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
