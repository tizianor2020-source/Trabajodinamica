<?php
include "conexion.php";
$stmt = $conn->prepare("DELETE FROM productos WHERE id_producto=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
?>