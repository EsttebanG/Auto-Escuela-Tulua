<?php
require '../../../../assets/config/db.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$duracion = $_POST['duracion'];
$cupos_disponibles = $_POST['cupos_disponibles'];

$stmt = $pdo->prepare('INSERT INTO curso (nombre, descripcion, precio, duracion, cupos_disponibles) VALUES (?, ?, ?, ?, ?)');
$stmt->execute([$nombre, $descripcion, $precio, $duracion, $cupos_disponibles]);

header('Location:../');
exit;
?>
