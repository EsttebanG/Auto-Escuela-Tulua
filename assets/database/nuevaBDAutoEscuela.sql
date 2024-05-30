CREATE DATABASE autoEscuela;
USE autoEscuela;

CREATE TABLE Rol (
    idRol INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL
);

CREATE TABLE Usuario (
    idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    contrasena VARCHAR(20) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    telefono VARCHAR(10),
    Rol_idRol INT,
    FOREIGN KEY (Rol_idRol) REFERENCES Rol(idRol)
);

CREATE TABLE asignatura (
    id_asignatura INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    Usuario_idUsuario INT,
    FOREIGN KEY (Usuario_idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE curso (
    id_curso INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2),
    duracion DECIMAL(5, 2),
    horario VARCHAR(50),
    fecha_inicio DATE,
    fecha_fin DATE,
    cupos_disponibles INT,
    asignatura_id_asignatura INT,
    FOREIGN KEY (asignatura_id_asignatura) REFERENCES asignatura(id_asignatura)
);

CREATE TABLE Usuario_has_curso (
    Usuario_idUsuario INT,
    curso_id_curso INT,
    PRIMARY KEY (Usuario_idUsuario, curso_id_curso),
    FOREIGN KEY (Usuario_idUsuario) REFERENCES Usuario(idUsuario),
    FOREIGN KEY (curso_id_curso) REFERENCES curso(id_curso)
);

CREATE TABLE clase (
    id_clase INT AUTO_INCREMENT PRIMARY KEY,
    tema VARCHAR(100) NOT NULL,
    aula VARCHAR(50),
    fecha DATE,
    hora_inicio TIME,
    hora_fin TIME,
    estado VARCHAR(20),
    registro_asistencia TEXT,
    Usuario_idUsuario INT,
    FOREIGN KEY (Usuario_idUsuario) REFERENCES Usuario(idUsuario)
);

CREATE TABLE tipo_clase (
    id_tipo_clase INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    duracion TIME,
    clase_id_clase INT,
    FOREIGN KEY (clase_id_clase) REFERENCES clase(id_clase)
);

CREATE TABLE evaluacion (
    id_evaluacion INT AUTO_INCREMENT PRIMARY KEY,
    fecha_evaluacion DATE,
    tipo_evaluacion VARCHAR(50),
    nota DECIMAL(5, 2),
    clase_id_clase INT,
    FOREIGN KEY (clase_id_clase) REFERENCES clase(id_clase)
);
