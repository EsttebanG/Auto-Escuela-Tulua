    <?php
    require '../../../../assets/config/db.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $duracion = $_POST['duracion'];
    $cupos_disponibles = $_POST['cupos_disponibles'];
    $fileImage1 = $_FILES['fileImage']['name'];
    $tmpFileImage = $_FILES['fileImage']['tmp_name'];
    $ruteFile = '../../../../img/Curso/' . $fileImage1;

    move_uploaded_file($tmpFileImage, $ruteFile);

    $stmt = $pdo->prepare('INSERT INTO curso (nombre, descripcion, curso_img_name, precio, duracion, cupos_disponibles) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$nombre, $descripcion, $fileImage1, $precio, $duracion, $cupos_disponibles]);


    header('Location:../');
    exit;
    ?>
