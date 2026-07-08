<?php

require_once "../app/models/Estudiante.php";

class EstudianteController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Estudiante();
    }

    // Listar
    public function listar()
    {
        return $this->modelo->obtenerEstudiantes();
    }

    // Guardar
    public function guardar(
        $nombre,
        $apellido,
        $correo,
        $telefono
    )
    {
        return $this->modelo->crear(
            $nombre,
            $apellido,
            $correo,
            $telefono
        );
    }

    // Obtener estudiante
    public function obtenerEstudiante($id)
    {
    return $this->modelo
                ->obtenerEstudiantePorId($id);
    }

    // Actualizar estudiante
    public function actualizar(
    $id,
    $nombre,
    $apellido,
    $correo,
    $telefono
    )
    {
    return $this->modelo->actualizar(
        $id,
        $nombre,
        $apellido,
        $correo,
        $telefono
    );
    }

    // Eliminar estudiante
    public function eliminar($id)
    {
    return $this->modelo->eliminar($id);
    }

    // Buscar estudiante
    public function buscar($texto)
    {
    return $this->modelo->buscar($texto);
    }
}