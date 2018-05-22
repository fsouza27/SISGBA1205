<?php
    //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISGBA | Home Aluno</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../../media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../../media/css/main.css" type="text/css"/>

        <?php
            include_once('conexao.php');
            $id = filter_input(INPUT_GET,"id");
            $nome = filter_input(INPUT_GET,"nome");
            $ra = filter_input(INPUT_GET,"ra");
            $email = filter_input(INPUT_GET,"email");
            $curso = (string) filter_input(INPUT_GET,"curso");

            $c = (string) $curso;
            mysqli_close($con);
        ?>
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

		<main>
			<section class="cadastro-form">
				<div class="container">
					<div class="col-xs-12">
							<h2>Alterar Aluno</h2>
					</div>
					<div id="conteudo" class="col-sm-8">
						<form method="GET" id="altera_aluno" action="alteraAluno.php">
							<div class="form-group">
								<!--<label for="pesquisa">Consulta</label>-->
								ID<input class="form-control" type="text" name="id"  value="<?php echo $id ?>"  /><br>
								Nome<input class="form-control" type="text" name="nome" value="<?php echo $nome ?>" /><br>
								RA<input class="form-control" type="text" name="ra" value="<?php echo $ra ?>" /><br>
								Email<input class="form-control" type="text" name="email" value="<?php echo $email ?>" /> <br>
								Curso<input class="form-control" type="text" name="curso" value="<?php echo $curso ?>" /> <br>
							</div>

                            <div class="from-group">
                                <button type="submit" class="btn btn-success pull-left">ALTERAR</button>
                                <a href="alunos.php"><p class="btn btn-primary pull-right">VOLTAR</p></a>
                                <div class="clearfix"></div>
                            </div>
						</form>
					</div>
			</section>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="../../mediajs/jquery-2.2.0.min.js"></script>
	</body>
</html>
