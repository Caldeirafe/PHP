<?php

$usuarios = array (
    ['email' => 'zebunda@gmail.com', 'senha' => '1234'],
    ['email' => 'zetripa@gmail.com', 'senha' => '12345'],
    ['email' => 'zepingola@gmail.com', 'senha' => '4321']
);

$usuarioAutenticado = false;

$emailUsuario = $_GET['email'];
$senhaUsuario = $_GET['senha'];

foreach($usuarios as $usuarios){
    if($emailUsuario == $usuarios['email'] && $senhaUsuario == $usuarios['senha']){
        $usuarioAutenticado = true;
        break;
    } else {
        $usuarioAutenticado = false;
    }
}

if($usuarioAutenticado){
    echo 'Login efeituado com sucesso !';
} else {
    header('location: index.php?login=erro');
}
?>