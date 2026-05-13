<?php

class Database
{
    private $host = "localhost";
    private $dbname = "feira_bosque_paz";
    private $user = "root";
    private $password = "1234";

    private $conn;

    public function conectar()
    {
        try {

            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;

        } catch (PDOException $e) {

            die("Erro na conexão: " . $e->getMessage());

        }
    }
}