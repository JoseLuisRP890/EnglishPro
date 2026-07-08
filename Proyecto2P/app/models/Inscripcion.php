<?php

require_once "../config/database.php";

class Inscripcion
{
    private $conn;
    private $tabla = "inscripciones";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    // Listar inscripciones
    public function obtenerInscripciones()
    {
        $sql = "SELECT
                    i.id_inscripcion,
                    e.nombre,
                    e.apellido,
                    c.nombre AS curso,
                    i.fecha_inscripcion
                FROM inscripciones i
                INNER JOIN estudiantes e
                    ON i.id_estudiante = e.id_estudiante
                INNER JOIN cursos c
                    ON i.id_curso = c.id_curso
                ORDER BY i.id_inscripcion ASC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     // Registrar inscripción
    public function crear($id_estudiante, $id_curso)
    {
    $sql = "INSERT INTO inscripciones
            (id_estudiante, id_curso, fecha_inscripcion)
            VALUES
            (:estudiante, :curso, CURDATE())";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':estudiante' => $id_estudiante,
        ':curso' => $id_curso
    ]);
    }

    // Obtener inscripción por ID
public function obtenerInscripcionPorId($id)
{
    $sql = "SELECT * FROM inscripciones
            WHERE id_inscripcion = :id";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([
        ':id' => $id
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Actualizar inscripción
public function actualizar($id, $id_estudiante, $id_curso)
{
    $sql = "UPDATE inscripciones
            SET
                id_estudiante = :estudiante,
                id_curso = :curso
            WHERE id_inscripcion = :id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id' => $id,
        ':estudiante' => $id_estudiante,
        ':curso' => $id_curso
    ]);
}

// Eliminar inscripción
    public function eliminar($id)
    {
    $sql = "DELETE FROM inscripciones
            WHERE id_inscripcion = :id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id' => $id
    ]);
    }

}