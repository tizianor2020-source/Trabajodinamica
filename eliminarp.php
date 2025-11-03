<?php
include "conexion.php";
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM personal WHERE id_personal=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
header("Location: listarpersonal.php");
exit;

?>