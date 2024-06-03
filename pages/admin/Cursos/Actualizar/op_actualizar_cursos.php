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

if ($fileImage1) {
    // Obtener el nombre de la imagen actual
    $stmt = $pdo->prepare('SELECT curso_img_name FROM curso WHERE id_curso = ?');
    $stmt->execute([$id]);
    $curso = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($curso && $curso['curso_img_name']) {
        $currentImage = '../../../../img/Curso/' . $curso['curso_img_name'];
        if (file_exists($currentImage)) {
            unlink($currentImage); // Eliminar la imagen actual
        }
    }

    // Mover la nueva imagen
    $ruteFile = '../../../../img/Curso/' . $fileImage1;
    move_uploaded_file($tmpFileImage, $ruteFile);

    // Actualizar curso incluyendo la nueva imagen
    $stmt = $pdo->prepare('UPDATE curso SET nombre = ?, descripcion = ?, curso_img_name = ?, precio = ?, duracion = ?, cupos_disponibles = ? WHERE id_curso = ?');
    $stmt->execute([$nombre, $descripcion, $fileImage1, $precio, $duracion, $cupos_disponibles, $id]);
} else {
    // Actualizar curso sin cambiar la imagen
    $stmt = $pdo->prepare('UPDATE curso SET nombre = ?, descripcion = ?, precio = ?, duracion = ?, cupos_disponibles = ? WHERE id_curso = ?');
    $stmt->execute([$nombre, $descripcion, $precio, $duracion, $cupos_disponibles, $id]);
}

header('Location: ../');
exit;
