<?php
session_start();
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $perfil = $_POST['perfil'];

    $stmt = $link->prepare("SELECT email FROM tb_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        header('Location: cadastro.php?cadastro=erro&motivo=email');
        exit();
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $link->prepare("INSERT INTO tb_user (nome, email, senha, perfil) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $senhaHash, $perfil);
    
    if ($stmt->execute()) {
        header('Location: index.php?cadastro=sucesso');
    } else {
        header('Location: cadastro.php?cadastro=erro');
    }
    exit();
}
?>