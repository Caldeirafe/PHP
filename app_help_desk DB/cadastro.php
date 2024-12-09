<html>
<head>
<meta charset="utf-8" />
<title>App Help Desk - Cadastro</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
.card-login {
    padding: 30px 0 0 0;
    width: 350px;
    margin: 0 auto;
}
a {
    color: #fff;
}
</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
    </a>
    <a class="nav-link active" href="index.php">Voltar</a>
</nav>

<div class="container">    
    <div class="row">
        <div class="card-login">
            <div class="card">
                <div class="card-header">
                    Cadastro
                </div>
                <div class="card-body">
                    <form action='registra_cadastro.php' method='POST'>
                        <div class="form-group">
                            <input name='nome' type="text" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <input name='email' type="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <input name='senha' type="password" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="perfil" required>
                                <option value="">Escolha uma opção</option>
                                <option value="ADM">ADM</option>
                                <option value="User">User</option>
                            </select>
                        </div>

                        <?php 
                        if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'erro') {
                            if (isset($_GET['motivo']) && $_GET['motivo'] === 'email') {
                                echo '<div class="alert alert-danger">E-mail já cadastrado!</div>';
                            } else if (isset($_GET['motivo']) && $_GET['motivo'] === 'perfil') {
                                echo '<div class="alert alert-danger">Selecione um perfil válido!</div>';
                            } else {
                                echo '<div class="alert alert-danger">Erro no cadastro!</div>';
                            }
                        }
                        ?>

                        <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>