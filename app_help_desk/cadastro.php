<html>
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
    }
    a{
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
            Login
            </div>
            <div class="card-body">
            <form action='validar_usuario.php' method='GET'>
            <div class="form-group">
                <input name='nome' type="text" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                <input name='email' type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                <input name='senha' type="password" class="form-control" placeholder="Senha">
                </div>
                <div class="form-group">
                    <select class="form-control" name="perfil" id="">
                        <option value="Selecione"> Escolha uma opção</option>
                        <option value="ADM">ADM</option>
                        <option value="User">User</option>
                    </select>
                </div>

                <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>