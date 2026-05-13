<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../App/Config/Database.php";
require_once "../../App/Model/Expositor.php";

header("Content-Type: application/json");

try {

    $expositor = new Expositor();

    $dados = $expositor->listar();

    echo json_encode([
        "status" => true,
        "dados" => $dados
    ]);

} catch(Exception $e) {

    echo json_encode([
        "status" => false,
        "msg" => $e->getMessage()
    ]);

}