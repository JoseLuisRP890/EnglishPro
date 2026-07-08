<?php

require_once "../app/models/Curso.php";

class CursoController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Curso();
    }

    // Mostrar todos los cursos
    public function listar()
    {
        $cursos = $this->modelo->obtenerCursos();

        return $cursos;
    }

    // Registrar un curso
    public function guardar($nombre, $nivel, $precio, $duracion, $descripcion)
    {
    return $this->modelo->crear(
        $nombre,
        $nivel,
        $precio,
        $duracion,
        $descripcion
    );
    }

    // Buscar un curso por ID
    public function obtenerCurso($id)
    {
    return $this->modelo->obtenerCursoPorId($id);
    }

    // Editar un curso
    public function actualizar($id, $nombre, $nivel, $precio, $duracion, $descripcion)
    {
    return $this->modelo->actualizar(
        $id,
        $nombre,
        $nivel,
        $precio,
        $duracion,
        $descripcion
    );
    }

    // Eliminar un curso
    public function eliminar($id)
    {
    return $this->modelo->eliminar($id);
    }

    // Buscar cursos
    public function buscar($texto)
    {
    return $this->modelo->buscar($texto);
    }
}