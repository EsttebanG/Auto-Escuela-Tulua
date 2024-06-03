<?php
require '../../../../assets/config/db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$duracion = $_POST['duracion'];
$cupos_disponibles = $_POST['cupos_disponibles'];


$stmt = $pdo->prepare('UPDATE curso SET nombre = ?, descripcion = ?, precio = ?, duracion = ?, cupos_disponibles = ? WHERE id_curso = ?');
$stmt->execute([$nombre, $descripcion, $precio, $duracion, $cupos_disponibles, $id]);

header('Location: ../');
exit;
