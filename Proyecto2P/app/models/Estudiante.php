<?php

require_once "../config/database.php";

class Estudiante
{
    private $conn;
    private $tabla = "estudiantes";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    // Listar estudiantes
    public function obtenerEstudiantes()
    {
        $sql = "SELECT *
                FROM " . $this->tabla . "
                ORDER BY id_estudiante ASC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Crear estudiante
    public function crear(
        $nombre,
        $apellido,
        $correo,
        $telefono
    )
    {
        $sql = "INSERT INTO " . $this->tabla . "
                (nombre, apellido, correo, telefono)
                VALUES
                (:nombre,:apellido,:correo,:telefono)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':nombre'=>$nombre,
            ':apellido'=>$apellido,
            ':correo'=>$correo,
            ':telefono'=>$telefono
        ]);
    }

    // Obtener estudiante por ID
    public function obtenerEstudiantePorId($id)
    {
    $sql = "SELECT *
            FROM " . $this->tabla . "
            WHERE id_estudiante = :id";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([
        ':id' => $id
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
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
    $sql = "UPDATE " . $this->tabla . "
            SET
                nombre=:nombre,
                apellido=:apellido,
                correo=:correo,
                telefono=:telefono
            WHERE id_estudiante=:id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id'=>$id,
        ':nombre'=>$nombre,
        ':apellido'=>$apellido,
        ':correo'=>$correo,
        ':telefono'=>$telefono
    ]);
    }

    // Eliminar estudiante
    public function eliminar($id)
    {
    $sql = "DELETE FROM " . $this->tabla . "
            WHERE id_estudiante=:id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id'=>$id
    ]);
    }

    // Buscar estudiante
    public function buscar($texto)
    {
    $sql = "SELECT *
            FROM " . $this->tabla . "
            WHERE nombre LIKE :texto
               OR apellido LIKE :texto
            ORDER BY id_estudiante";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([
        ':texto'=>'%'.$texto.'%'
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener todos los estudiantes
    public function obtenerTodos()
    {
    $sql = "SELECT
                id_estudiante,
                nombre,
                apellido
            FROM estudiantes
            ORDER BY nombre";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}