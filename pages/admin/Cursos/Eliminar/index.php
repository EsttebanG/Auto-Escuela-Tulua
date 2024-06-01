<?php
require '../../../../assets/config/db.php';

$id = $_GET['id'];

$stmt = $pdo->prepare('DELETE FROM curso WHERE id_curso = ?');
$stmt->execute([$id]);

header('Location:../');
exit;
?>
