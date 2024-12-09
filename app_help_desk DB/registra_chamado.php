<?php
require_once "validar_login.php";
require_once "conexao.php";

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$usuario_id = $_SESSION['id'];
$perfil = $_SESSION['perfil'];

$stmt = $link->prepare("INSERT INTO chamados (usuario_id, perfil, titulo, categoria, descricao) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $usuario_id, $perfil, $titulo, $categoria, $descricao);

if ($stmt->execute()) {
    header('location: abrir_chamado.php?cadastro=efetuado');
} else {
    header('location: abrir_chamado.php?cadastro=erro');
}
exit();
?>