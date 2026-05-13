<?php

require_once __DIR__ . '/../Config/Database.php';

class Expositor
{
    private $conn;
    private $table = "expositor";

    private $id_expositor;
    private $nome;
    private $telefone;
    private $descricao;
    private $logo;

    public function __construct()
    {
        $database = new Database();

        $this->conn = $database->conectar();
    }

    /* =========================
       GETTERS E SETTERS
    ========================== */

    public function getIdExpositor()
    {
        return $this->id_expositor;
    }

    public function setIdExpositor($id)
    {
        $this->id_expositor = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /* =========================
       CADASTRAR EXPOSITOR
    ========================== */

    public function cadastrar()
    {
        $query = "INSERT INTO {$this->table}
        (
            nome,
            telefone,
            descricao,
            logo
        )
        VALUES
        (
            :nome,
            :telefone,
            :descricao,
            :logo
        )";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":logo", $this->logo);

        return $stmt->execute();
    }

    /* =========================
       LISTAR EXPOSITORES
    ========================== */

    public function listar()
    {
        $query = "SELECT * FROM {$this->table}
                  ORDER BY id_expositor DESC";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}