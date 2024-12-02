<?php

require_once "validar_login.php";

//Organizando os dados, retirando | dos possíveis valores
$titulo = str_replace('|', '-', $_POST['titulo']);
$categoria = str_replace('|', '-', $_POST['categoria']);
$descricao = str_replace('|', '-', $_POST['descricao']);
$idUsuario = str_replace('|', '-', $_SESSION['id']);
$perfilUsuario = str_replace('|', '-', $_SESSION['perfil']);


// Concatenando os valores de cada parâmetro, separado por "|"
$dados = $idUsuario . '|' . $perfilUsuario . '|' . $titulo . '|' . $categoria . '|' . $descricao . PHP_EOL;

//Abrindo o arquivo e armazenando em uma variável
$arquivo = fopen('registros.txt','a');

//Escrevendo no arquivo
fwrite($arquivo, $dados);

//Fechando o arquivo
fclose($arquivo);

//Redirecionando o arquivo e passando os dados para efetivar um aviso com alert em javascript
header('location: abrir_chamado.php?cadastro=efetuado')

?>