<?php

session_start();

$usuarios = array (
    ['id' => 1, 'email' => 'zebunda@gmail.com', 'senha' => '1234', 'perfil' => 'administrador'],
    ['id' => 2, 'email' => 'zetripa@gmail.com', 'senha' => '12345', 'perfil' => 'usuario'],
    ['id' => 3, 'email' => 'zepingola@gmail.com', 'senha' => '4321', 'perfil' => 'usuario']
);

$usuarioAutenticado = false;

$emailUsuario = $_GET['email'];
$senhaUsuario = $_GET['senha'];

for ($idx = 0; $idx < count($usuarios); $idx++) {
    if ($emailUsuario == $usuarios[$idx]['email'] && $senhaUsuario == $usuarios[$idx]['senha']) {
        $usuarioAutenticado = true;
        $usuarioId = $usuarios[$idx]['id']; // Captura o ID do usuário autenticado
        $perfil = $usuarios[$idx]['perfil'];
        break;
    }
}

if ($usuarioAutenticado) {
    // Validando a sessão
    $_SESSION['autenticado'] = 'sim';
    $_SESSION['id'] = $usuarioId; // Armazena o ID do usuário na sessão
    $_SESSION['perfil'] = $perfil;
    header('location: home.php');
} else {
    // Redirecionando para a página de login com erro
    header('location: index.php?login=erro');
}
?>