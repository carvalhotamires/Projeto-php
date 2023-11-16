<?php
$hostname = "localhost";
$nome = "root";
$email = "";
$servico = "";
$mensagem = "";
$dbname = "formulario";

// Criar a conexão
$conn = new mysqli($hostname, $username,$servico,$mensagem, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);

    echo "Falha ao conectar: (". $mysqli ->connect_errno ." ) "  . $mysqli->connect_error;
}

?>