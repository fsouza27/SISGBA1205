<!DOCTYPE html>
<html>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA | Login</title>
        <!-- CSS -->
		<link rel="stylesheet" href="media/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="media/css/main.css" type="text/css"/>
    </head>
    <body>
        <header>
            <div>
                <img src="media/images/chapeu.png" id="hat"/>
            </div>
            <div>
                <h3>
                    <span class="bold">SISGBA</span>
                </h3>
                <h4>
                Sistema Gerenciador de Bancas Acadêmicas Web
                </h4>
            </div>
        </header>
        <section class="login">
            <div class="container">
                <div class="col-xs-12">
                    <form id="login" action="valida.php" method="post">
                        <h3>Acesse sua conta</h3>
                        <h4 class="blueText">
                            Acesso para alunos e docentes
                        </h4>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" value="">
                        </div>
                        <button type="submit" value="Entrar" class="btn btn-success">ENTRAR</button>
                        <h5 class="blueText esqSenha" ><a href="#">Esqueci minha senha</a></h5>
                        <a href="users/aluno/cadastroAluno.php"><div class="btn btn-primary btnCriarCadastro">CRIAR CADASTRO</div></a>
                    </form>
                </div>
            </div>
        </section>
        <footer>
            SISGBA | © Todos os direitos reservados
        </footer>
    </body>
</html>
