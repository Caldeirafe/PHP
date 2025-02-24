<?php
    require_once "validar_login.php";
    if(!isset($_SESSION['perfil']) || ($_SESSION['perfil'] == 'Usuario')){
      header('location: home.php?permissao=nao');
    } else if(!isset($_SESSION['perfil']) || ($_SESSION['perfil'] == 'Tecnico')){
      header('location: home.php?permissao=nao');}
    require "conexao.php";
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" href="logo.png" type="image/x-icon">
  <style>
    .table-responsive {
      overflow-x: auto;
    }
    .btn-sm {
      padding: 5px; /* Define um padding de 5px para os botões */
      min-width: auto; /* Remove a largura mínima */
    }
    .thead-light th {
      background-color: #ffffff; /* Define a cor de fundo branco */
      font-weight: bold; /* Define o texto em negrito */
      text-align: center; /* Centraliza o texto */
    }
    td, th {
      text-align: center; /* Centraliza o conteúdo das células */
    }
    @media (max-width: 1000px) {
      .hide-on-small {
        display: none;
      }
    }
    @media (max-width: 390px) {
      .hide-on-extra-small {
        display: none;
      }
    }
    @media (max-width: 300px) {
      .hide-on-very-small {
        display: none;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">VOLTAR</a>
      </li>
    </ul>
  </nav>

    <?php //VALIDA SE O CHAMADO FOI DELETADO
        if(isset($_GET['delete']) && $_GET['delete'] === 'sucesso') { ?>
            <script> alert('Chamado excluído!');</script>
        <?php } ?>    
        
        <?php //VALIDA SE O CHAMADO FOI EDITADO
        if(isset($_GET['edicao']) && $_GET['edicao'] === 'sucesso') { ?>
            <script> alert('Chamado Editado!');</script>
        <?php } ?>

    <div class="container">
        <br>
        <?php
            $sql = "SELECT * FROM chamados";



            $sql = "SELECT * FROM usuarios";




        ?>
    </div>

    <script>
      function confirmDeletion(id) {
          if (confirm("Você realmente deseja excluir este chamado?")) {
              window.location.href = 'deletar_chamado.php?id=' + id;
          }
      }
    </script>

</body>

</html>