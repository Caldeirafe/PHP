<?php
  require_once "validar_login.php";

  //declarando variável
  $chamados = [];

  //Abrindo o arquivo para consultar os dados
  $arquivo = fopen('registros.txt', 'r'); 

  //Enquanto não for o final do arquivo ele entra;
  while(!feof($arquivo)){
    //Pega a linha e guarda no registro
    $registro = fgets($arquivo);
    //Pega o registro e guarda num array, onde conterá todos os chamados
    $chamados[] = $registro;
  }

  //sem esquecer de fechar o arquivo
  fclose($arquivo);
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
              <?php 
                $usuarioPerfil = $_SESSION['perfil'];
                $usuarioId = $_SESSION['id'];
              
              foreach($chamados as $chamado){ ?>

                <!-- Usamos o explode para separar os valores de cada chamado em um novo array -->
                <?php $chamado_dados = explode('|', $chamado); 
                
                //Para validar que só será exibido um novo card se possuir todos os valores preenchidos
                  if(count($chamado_dados) < 5){
                    continue; }

                    if ($usuarioPerfil != 'administrador' && $chamado_dados[0] != $usuarioId) {
                      continue;
                      }
              
                ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">

                  <!-- Nos 3 itens abaixo aplicamos os valores respectivos em cada um deles -->
                  <h5 class="card-title"><?php echo $chamado_dados[2] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[3] ?></h6>
                  <p class="card-text"><?php echo $chamado_dados[4] ?></p>   
                  <?php if ($usuarioPerfil == 'administrador') { ?>
                    <p class="card-text"><strong>ID do usuário: </strong><?php echo $chamado_dados[0] ?></p>
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