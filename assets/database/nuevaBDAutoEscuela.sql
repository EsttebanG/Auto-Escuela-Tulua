-- DROP DATABASE id22228301_autoescuelatulua;

CREATE DATABASE id22228301_autoescuelatulua;
USE id22228301_autoescuelatulua;

-- el codigo anterior fue documentado por motivos de error al usarlo en la base de datos por limitacion de servicios
-- del sistema por favor abstenerse de usarlo sin conocimiento de la creacion del mismo y uso de implementacion 
-- especial e avanzada de este en la base de datos del servicio


CREATE TABLE Rol (
    idRol INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL
);

CREATE TABLE Usuario (
    cedula INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    contrasena VARCHAR(20) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    telefono VARCHAR(10),
    usuario_img_name VARCHAR(100),
    Rol_idRol INT,
    FOREIGN KEY (Rol_idRol) REFERENCES Rol(idRol)
);

CREATE TABLE asignatura (
    id_asignatura INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    Usuario_cedula INT,
    FOREIGN KEY (Usuario_cedula) REFERENCES Usuario(cedula)
);

CREATE TABLE curso (
    id_curso INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(200),
    curso_img_name VARCHAR(100),
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
    Usuario_cedula INT,
    curso_id_curso INT,
    PRIMARY KEY (Usuario_cedula, curso_id_curso),
    FOREIGN KEY (Usuario_cedula) REFERENCES Usuario(cedula),
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
    Usuario_cedula INT,
    FOREIGN KEY (Usuario_cedula) REFERENCES Usuario(cedula)
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
