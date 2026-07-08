# EnglishPro

EnglishPro es una aplicación web desarrollada en PHP, MySQL y arquitectura MVC para la administración académica de una plataforma de cursos de inglés.

El sistema permite gestionar cursos, estudiantes e inscripciones mediante operaciones CRUD, además de contar con una interfaz moderna, modo claro/oscuro y despliegue web en Render.

---

## Tecnologías utilizadas

- PHP
- MySQL
- PDO
- HTML
- CSS
- JavaScript
- Arquitectura MVC
- Docker
- Render
- Aiven MySQL

---

## Funcionalidades principales

- Gestión de cursos.
- Gestión de estudiantes.
- Gestión de inscripciones.
- Búsqueda de cursos.
- Búsqueda de estudiantes.
- Registro, edición y eliminación de datos.
- Confirmación antes de eliminar registros.
- Relación entre estudiantes y cursos mediante inscripciones.
- Interfaz responsive.
- Modo claro y modo oscuro.
- Despliegue en la nube.

---

## Estructura del proyecto

```text
Proyecto2P/
│
├── app/
│   ├── controllers/
│   │   ├── CursoController.php
│   │   ├── EstudianteController.php
│   │   └── InscripcionController.php
│   │
│   ├── models/
│   │   ├── Curso.php
│   │   ├── Estudiante.php
│   │   └── Inscripcion.php
│   │
│   └── views/
│       ├── cursos/
│       ├── estudiantes/
│       └── inscripciones/
│
├── config/
│   └── database.php
│
├── public/
│   ├── index.php
│   ├── css/
│   ├── js/
│   └── img/
│
├── Dockerfile
└── englishpro_db.sql