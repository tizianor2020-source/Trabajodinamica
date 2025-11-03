<?php
include "conexion.php";
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM productos WHERE id_producto=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
header("Location: listarproductos.php");
exit;

?>