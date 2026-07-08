<?php

require_once "../app/models/Inscripcion.php";
require_once "../app/models/Curso.php";
require_once "../app/models/Estudiante.php";

class InscripcionController
{
    private $modelo;
    private $curso;
    private $estudiante;

    public function __construct()
    {
        $this->modelo = new Inscripcion();
        $this->curso = new Curso();
        $this->estudiante = new Estudiante();
    }

    // Listar inscripciones
    public function listar()
    {
        return $this->modelo->obtenerInscripciones();
    }

    // Guardar inscripción
    public function guardar($id_estudiante, $id_curso)
    {
        return $this->modelo->crear($id_estudiante, $id_curso);
    }

    // Obtener cursos
    public function obtenerCursos()
    {
        return $this->curso->obtenerTodos();
    }

    // Obtener estudiantes
    public function obtenerEstudiantes()
    {
        return $this->estudiante->obtenerTodos();
    }

    // Obtener inscripción
    public function obtenerInscripcion($id)
    {
    return $this->modelo->obtenerInscripcionPorId($id);
    }

    // Actualizar inscripción
    public function actualizar($id, $id_estudiante, $id_curso)
    {
    return $this->modelo->actualizar(
        $id,
        $id_estudiante,
        $id_curso
    );
    }

    // Eliminar inscripción
    public function eliminar($id)
    {
    return $this->modelo->eliminar($id);
    }
}