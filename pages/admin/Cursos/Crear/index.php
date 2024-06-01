<!DOCTYPE html>
<html>
<head>
    <title>Crear Nuevo Curso</title>
</head>
<body>
    <h1>Crear Nuevo Curso</h1>
    <form action="op_crear_cursos.php" method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br>
        <label>Descripción:</label><br>
        <input type="text" name="descripcion"><br>
        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" required><br>
        <label>Duración (horas):</label><br>
        <input type="number" step="0.01" name="duracion" required><br>
        <label>Cupos Disponibles:</label><br>
        <input type="number" name="cupos_disponibles" required><br>
        <button type="submit">Crear</button>
    </form>
    <a href="../">Regresar al Listado</a>
</body>
</html>
