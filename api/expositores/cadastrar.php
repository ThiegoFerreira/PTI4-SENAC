<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../App/Config/Database.php";
require_once "../../App/Model/Expositor.php";

header("Content-Type: application/json");

try {

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $descricao = $_POST["descricao"];

    /* =========================
       UPLOAD DA IMAGEM
    ========================== */

    $diretorio = "../../Public/uploads/";

    if (!is_dir($diretorio)) {

        mkdir($diretorio, 0755, true);

    }

    $nomeArquivo = time() . "_" . $_FILES["logo"]["name"];

    $caminhoArquivo = $diretorio . $nomeArquivo;

    move_uploaded_file(
        $_FILES["logo"]["tmp_name"],
        $caminhoArquivo
    );

    /* =========================
       SALVAR NO BANCO
    ========================== */

    $expositor = new Expositor();

    $expositor->setNome($nome);
    $expositor->setTelefone($telefone);
    $expositor->setDescricao($descricao);

    $expositor->setLogo(
        "uploads/" . $nomeArquivo
    );

    $resultado = $expositor->cadastrar();

    if ($resultado) {

        echo json_encode([
            "status" => true,
            "msg" => "Expositor cadastrado com sucesso!"
        ]);

    } else {

        echo json_encode([
            "status" => false,
            "msg" => "Erro ao cadastrar expositor."
        ]);

    }

} catch(Exception $e) {

    echo json_encode([
        "status" => false,
        "msg" => $e->getMessage()
    ]);

}