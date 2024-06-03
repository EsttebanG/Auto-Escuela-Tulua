<?php
require '../../../../assets/config/db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$duracion = $_POST['duracion'];
$cupos_disponibles = $_POST['cupos_disponibles'];
$fileImage1 = $_FILES['fileImage']['name'];
$tmpFileImage = $_FILES['fileImage']['tmp_name'];
$ruteFile = '../../../../img/Curso/'.$fileImage1;

move_uploaded_file($tmpFileImage,$ruteFile);

$stmt = $pdo->prepare('UPDATE curso SET nombre = ?, descripcion = ?, curso_img_name = ?, precio = ?, duracion = ?, cupos_disponibles = ? WHERE id_curso = ?');
$stmt->execute([$nombre, $descripcion,  $fileImage1, $precio, $duracion, $cupos_disponibles, $id]);

header('Location: ../');
exit;
?>
