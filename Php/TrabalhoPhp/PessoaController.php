<?php
include_once("Database.php");
include_once("Pessoa_da.php");

if (isset($_POST["acao"])) {
    if ($_POST["acao"] == "cadastrar") {
        // Lógica para cadastrar uma pessoa
        if (isset($_POST["nome"]) && isset($_POST["email"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            insere_usuario($nome, $email);
            header("Location: listar.php");
            exit();
        }
    } elseif ($_POST["acao"] == "editar") {
        // Lógica para editar uma pessoa
        if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"])) {
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            editar_usuario($id, $nome, $email); // Função que você precisa implementar
            header("Location: listar.php");
            exit();
        }
    }
} else {
    echo "Erro: Ação não especificada.";
}
?>