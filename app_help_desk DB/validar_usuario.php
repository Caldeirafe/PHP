<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $link->prepare("SELECT id, senha, perfil FROM tb_user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['autenticado'] = true;
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['perfil'] = $usuario['perfil'];
            header('Location: home.php');
            exit();
        }
    }

    header('Location: index.php?login=erro');
    exit();
}
?>