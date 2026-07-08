<?php

require_once "../config/database.php";

class Curso
{
    private $conn;
    private $tabla = "cursos";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    // Listar todos los cursos
    public function obtenerCursos()
    {
        $sql = "SELECT * FROM " . $this->tabla . " ORDER BY id_curso ASC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Metodo agregar cursos
    public function crear($nombre, $nivel, $precio, $duracion, $descripcion)
    {
    $sql = "INSERT INTO " . $this->tabla . " 
            (nombre, nivel, precio, duracion, descripcion)
            VALUES (:nombre, :nivel, :precio, :duracion, :descripcion)";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':nombre' => $nombre,
        ':nivel' => $nivel,
        ':precio' => $precio,
        ':duracion' => $duracion,
        ':descripcion' => $descripcion
    ]);
    }

    // Obtener un curso por su ID
    public function obtenerCursoPorId($id)
    {
    $sql = "SELECT * FROM " . $this->tabla . " WHERE id_curso = :id";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([
        ':id' => $id
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar un curso
    public function actualizar($id, $nombre, $nivel, $precio, $duracion, $descripcion)
    {
    $sql = "UPDATE " . $this->tabla . "
            SET
                nombre = :nombre,
                nivel = :nivel,
                precio = :precio,
                duracion = :duracion,
                descripcion = :descripcion
            WHERE id_curso = :id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id' => $id,
        ':nombre' => $nombre,
        ':nivel' => $nivel,
        ':precio' => $precio,
        ':duracion' => $duracion,
        ':descripcion' => $descripcion
    ]);
    }

    // Eliminar un curso
    public function eliminar($id)
    {
    $sql = "DELETE FROM " . $this->tabla . " WHERE id_curso = :id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id' => $id
    ]);
    }

    // Buscar cursos por nombre
    public function buscar($texto)
    {
    $sql = "SELECT *
            FROM " . $this->tabla . "
            WHERE nombre LIKE :texto
            ORDER BY id_curso ASC";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([
        ':texto' => '%' . $texto . '%'
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener todos los cursos
    public function obtenerTodos()
    {
    $sql = "SELECT id_curso, nombre
            FROM cursos
            ORDER BY nombre";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}