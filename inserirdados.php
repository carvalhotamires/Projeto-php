<?php
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $servico = $_POST["servico"];
    $mensagem = $_POST["mensagem"];

    // Preparar e executar a consulta SQL para inserir dados
    $sql = "INSERT INTO sua_tabela (nome,email, servico, mensagem) VALUES ('$nome', '$email', '$servico', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
}
