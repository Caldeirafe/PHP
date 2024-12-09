<?php
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $link->prepare("SELECT * FROM tb_user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    
    // Verificar se a senha antiga precisa ser migrada
    if (strlen($usuario['senha']) != 60) {
        // Migrar senha antiga para novo hash
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        
        $update = $link->prepare("UPDATE tb_user SET senha = ? WHERE id = ?");
        $update->bind_param("si", $senhaHash, $usuario['id']);
        $update->execute();
        
        // Verificar nova senha
        if (password_verify($senha, $senhaHash)) {
            $_SESSION['autenticado'] = 'sim';
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['perfil'] = $usuario['perfil'];
            header('Location: home.php');
            exit();
        }
    }
    
    // Verificação padrão de senha
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['perfil'] = $usuario['perfil'];
        header('Location: home.php');
        exit();
    }
}

$_SESSION['autenticado'] = 'nao';
header('Location: index.php?login=erro');
exit();
?>