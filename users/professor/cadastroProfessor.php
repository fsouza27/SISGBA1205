<?php
    //Verifica se o usuário está logado
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA | Cadastro de Professor</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../../media/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="../../media/css/main.css" type="text/css"/>
    </head>
    <body>
        <header>
            <div>
                <img src="../../media/images/chapeu.png" id="hat"/>
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
        <section>
            <nav>
                <ul class="menu-home">
                    <a href="homeProfessor.php"><li><h5>Voltar</h5></li></a>
                    <a href="sair.php"><li><h5>Sair</h5></li></a>
                </ul>
            </nav>
        </section>
        <section class="cadastro-form">
            <div class="container">
                <div class="col-xs-6">
                        <h2>Cadastro de Professor</h2>
                </div>
                <div class="col-sm-8">
                    <form id="cadastro_professor" action="processaProfessor.php" method="post">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="rf">RF:</label>
                            <input type="number" name="rf" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="disciplina">Disciplina</label>
                            <input type="text" name="disciplina" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="confSenha">Confirmar senha</label>
                            <input type="password" name="confSenha" class="form-control" value="">
                        </div>
                        <div class="from-group">
                            <button type="submit" class="btn btn-success pull-right">ENVIAR</button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <p class="desc-form"></p>
                </div>
            </div>
        </section>
    </body>
</html>
