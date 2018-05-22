<?php
    //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location:sair.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISGBA | Alteração de TG</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../media/css/main.css" type="text/css"/>

        <?php
            include_once('conexao.php');
            $id = $_GET['id'];
            $titulo = $_GET['titulo'];
            $curso = $_GET['curso'];
            $tipo = $_GET['tipo'];
            $profOrientador = $_GET['profOrientador'];
            $descricao = $_GET['descricao'];
        ?>
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

		<main>
			<section class="cadastro-form">
				<div class="container">
					<div class="col-xs-12">
							<h2>Alterar TG</h2>
					</div>
					<div id="conteudo" class="col-sm-8">
						<form method="GET" id="altera_tg" action="functionAlteraTg.php">
							<div class="form-group">
								<!--<label for="pesquisa">Consulta</label>-->
								ID<input class="form-control" type="text" name="id"  value="<?php echo $id ?>" /><br>
								Título<input class="form-control" type="text" name="titulo" value="<?php echo $titulo ?>" /><br>
								Curso<input class="form-control" type="text" name="curso" value="<?php echo $curso ?>" /> <br>
								Tipo<input class="form-control" type="text" name="tipo" value="<?php echo $tipo ?>" /> <br>
								Professor Orientador<input class="form-control" type="text" name="profOrientador" value="<?php echo $profOrientador ?>" /> <br>
								Descrição<input class="form-control" type="text" name="descricao" value="<?php echo $descricao ?>" /> <br>
                            </div>

                            <div class="from-group">
                                <button type="submit" class="btn btn-success pull-left">ALTERAR</button>
                                <a href="tg.php"><p class="btn btn-primary pull-right">VOLTAR</p></a>
                                <div class="clearfix"></div>
                            </div>
						</form>
					</div>
			</section>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="../media/js/jquery-2.2.0.min.js"></script>
	</body>
</html>