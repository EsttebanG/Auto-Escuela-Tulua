<?php
require '../../../assets/config/db.php';

$stmt = $pdo->query('SELECT * FROM curso');
$cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("../../../assets/config/head.php"); ?>
    <title>Listado de Cursos</title>
</head>

<body>
    <?php include("../../../assets/config/topbar_admin.php"); ?>



    <main>
        <section>
            <div class="container">
                <div class="row m-5 d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <h1>Lista de Usuarios</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-end">
                                <a class="btn btn-warning me-lg-5 mb-lg-2 me-ss-0" href="Crear/">Crear Nuevo Curso</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <table class="table table-striped-columns text-center" border="1">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Duración</th>
                                            <th>Cupos Disponibles</th>
                                            <th>Acciones</th>
                                        </tr>
                                        <?php foreach ($cursos as $curso) : ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($curso['id_curso']); ?></td>
                                                <td><?php echo htmlspecialchars($curso['nombre']); ?></td>
                                                <td><?php echo htmlspecialchars($curso['descripcion']); ?></td>
                                                <td><?php echo htmlspecialchars($curso['precio']); ?></td>
                                                <td><?php echo htmlspecialchars($curso['duracion']); ?></td>
                                                <td><?php echo htmlspecialchars($curso['cupos_disponibles']); ?></td>
                                                <td>
                                                    <a class="btn btn-warning m-lg-2 m-ss-2" href="Actualizar/?id=<?php echo $curso['id_curso']; ?>">Actualizar</a>
                                                    <a class="btn btn-warning m-lg-2 m-ss-2" href="Eliminar/?id=<?php echo $curso['id_curso']; ?>">Eliminar</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

        <!-- Botón de WhatsApp -->
        <?php include("../../../assets/config/whatsapp.php"); ?>
        <!-- Botón de WhatsApp fin -->

        <?php include("../../../assets/config/footer.php"); ?>
        <?php include("../../../assets/config/js.php"); ?>

    </table>
</body>

</html>