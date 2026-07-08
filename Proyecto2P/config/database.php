<?php

class Database
{
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $port;
    public $conn;

    public function __construct()
    {
        // Si existen variables de entorno (Render), las usa.
        // Si no existen, usa XAMPP local.
        $this->host = getenv("DB_HOST") ?: "localhost";
        $this->db_name = getenv("DB_NAME") ?: "englishpro_db";
        $this->username = getenv("DB_USER") ?: "root";
        $this->password = getenv("DB_PASS") ?: "";
        $this->port = getenv("DB_PORT") ?: "3306";
    }

    public function conectar()
    {
        $this->conn = null;

        try {

            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db_name};charset=utf8mb4";

            $this->conn = new PDO(
                $dsn,
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );

        } catch (PDOException $e) {

            die("Error de conexión: " . $e->getMessage());

        }

        return $this->conn;
    }
}