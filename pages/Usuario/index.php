<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <title>Auto Escuela Tuluá - Usuarios</title>
</head>

<body>
    <?php include("../../assets/config/topbar.php"); ?>

    <main>
        <section>
            <div class="container">
                <?php
                // Incluir la configuración de la base de datos
                require '../../assets/config/db.php';

                // Verificar si el formulario fue enviado y si el ID está presente
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
                    $id = $_POST['id'];

                    try {
                        // Preparar y ejecutar la consulta para obtener el usuario por ID
                        $stmt = $pdo->prepare('SELECT * FROM usuario WHERE cedula = :id');
                        $stmt->execute([':id' => $id]);

                        // Obtener el resultado
                        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                        // Verificar si el usuario existe
                        if ($usuario) {
                ?>
                            <div class="row m-5 d-flex justify-content-center align-items-center">
                                <div class="col-6">
                                    <div class="mx-auto d-flex align-items-center justify-content-center">
                                        <picture class="rounded-5">
                                            <source srcset="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT37XYCmx_TcTnP5dIjY0otg-eq09BsXRlS2w&s" type="image/svg+xml">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT37XYCmx_TcTnP5dIjY0otg-eq09BsXRlS2w&s" class="img-fluid img-thumbnail rounded-5" alt="...">
                                        </picture>
                                    </div>
                                    <div class="mt-3 mx-auto d-flex align-items-center justify-content-center">
                                        <input class="mx-auto btn btn-warning" type="file" id="file-input" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <div>
                                        <p><strong>Nombre</strong>: <span><?php echo htmlspecialchars($usuario['nombre']); ?></span></p>
                                        <p><strong>Apellido</strong>: <span><?php echo htmlspecialchars($usuario['apellido']); ?></span></p>
                                        <p><strong>Correo Electrónico</strong>: <span><?php echo htmlspecialchars($usuario['email']); ?></span></p>
                                        <p><strong>Fecha de Registro</strong>: <span><?php echo htmlspecialchars($usuario['fecha_registro']); ?></span></p>
                                    </div>
                                </div>
                            </div>
                <?php
                        } else {
                            echo 'Usuario no encontrado';
                        }
                    } catch (PDOException $e) {
                        // Manejar errores potenciales
                        echo 'Error de base de datos: ' . $e->getMessage();
                    }
                } else {
                    echo 'ID de usuario no proporcionado';
                }
                ?>

            </div>
        </section>
    </main>

    </section>
    <!-- Botón de WhatsApp -->
    <?php include("../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../assets/config/footer.php"); ?>
    <?php include("../../assets/config/js.php"); ?>

</body>

</html>