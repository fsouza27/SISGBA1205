<?php
    //Verifica se o usuário está logado
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location:sair.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA | Cadastro de Trabalhos</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../media/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="../media/css/main.css" type="text/css"/>
    </head>
    <body>
        <header>
            <div>
                <img src="../media/images/chapeu.png" id="hat"/>
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
                    <li onClick="JavaScript: window.history.back();"><h5>Voltar</h5></li>
                    <a href="sair.php"><li><h5>Sair</h5></li></a>
                </ul>
            </nav>
        </section>
        <section class="cadastro-form">
            <div class="container">
                <div class="col-xs-8">
                        <h2>Cadastro de Trabalhos Acadêmicos</h2>
                </div>
                <div class="col-sm-8">
                    <form id="cadastro_tg" action="processaTg.php" method="post">
                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="curso">Curso:</label>
                            <input type="text" name="curso" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="profOrientador">Professor Orientador</label>
                            <input type="text" name="profOrientador" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="desccricao">Descrição</label>
                            <input type="text" name="descricao" class="form-control" value="">
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
