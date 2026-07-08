CREATE TABLE cursos (
    id_curso INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    nivel ENUM('Básico','Intermedio','Avanzado') NOT NULL,
    precio DECIMAL(8,2) NOT NULL,
    duracion VARCHAR(50) NOT NULL,
    descripcion TEXT
);

CREATE TABLE estudiantes (
    id_estudiante INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(20) NOT NULL
);

CREATE TABLE inscripciones (
    id_inscripcion INT AUTO_INCREMENT PRIMARY KEY,
    id_estudiante INT NOT NULL,
    id_curso INT NOT NULL,
    fecha_inscripcion DATE NOT NULL,

    CONSTRAINT fk_estudiante
        FOREIGN KEY (id_estudiante)
        REFERENCES estudiantes(id_estudiante)
        ON UPDATE CASCADE
        ON DELETE CASCADE,

    CONSTRAINT fk_curso
        FOREIGN KEY (id_curso)
        REFERENCES cursos(id_curso)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

INSERT INTO cursos (nombre, nivel, precio, duracion, descripcion) VALUES
('Inglés Básico', 'Básico', 25.00, '3 meses', 'Curso para estudiantes que inician desde cero.'),
('Inglés Intermedio', 'Intermedio', 40.00, '4 meses', 'Curso para mejorar la comunicación y comprensión.'),
('Inglés Avanzado', 'Avanzado', 60.00, '5 meses', 'Curso orientado al inglés profesional y académico.');

INSERT INTO estudiantes (nombre, apellido, correo, telefono) VALUES
('José', 'Rivadeneira', 'jose@email.com', '0991111111'),
('María', 'Pérez', 'maria@email.com', '0982222222'),
('Carlos', 'López', 'carlos@email.com', '0973333333');

INSERT INTO inscripciones (id_estudiante, id_curso, fecha_inscripcion) VALUES
(1, 1, '2026-07-04'),
(2, 2, '2026-07-04'),
(3, 3, '2026-07-04');