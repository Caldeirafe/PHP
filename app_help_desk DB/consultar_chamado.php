<?php
require_once "validar_login.php";
require_once "conexao.php";  // Importante incluir o arquivo de conexão

$usuarioPerfil = $_SESSION['perfil'];
$usuarioId = $_SESSION['id'];

// Preparar a consulta SQL
if ($usuarioPerfil == 'ADM') {
    // Se for administrador, busca todos os chamados
    $stmt = $link->prepare("SELECT * FROM chamados");
} else {
    // Se não for administrador, busca apenas os chamados do usuário logado
    $stmt = $link->prepare("SELECT * FROM chamados WHERE usuario_id = ?");
    $stmt->bind_param("i", $usuarioId);
}

// Executar a consulta
$stmt->execute();
$resultado = $stmt->get_result();

// Recuperar os chamados
$chamados = [];
while ($chamado = $resultado->fetch_assoc()) {
    $chamados[] = $chamado;
}
?>

<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
            <!-- Rodamos um foreach passando por todos os chamados -->
              <div class="card mb-3 bg-light">
              <div class="card-body">
    <?php foreach($chamados as $chamado){ ?>
        <div class="card mb-3 bg-light">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($chamado['titulo']) ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($chamado['categoria']) ?></h6>
                <p class="card-text"><?php echo htmlspecialchars($chamado['descricao']) ?></p>   
                <?php if ($usuarioPerfil == 'administrador') { ?>
                    <p class="card-text"><strong>ID do usuário: </strong><?php echo $chamado['usuario_id'] ?></p>
                  <?php } ?>            
                </div>
              </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>