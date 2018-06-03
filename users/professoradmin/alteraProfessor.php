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
        <title>SISGBA | Alterar Aluno</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../../media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../../media/css/main.css" type="text/css"/>

        <?php
            include_once('conexao.php');
            $id = $_GET['id'];
            $nome = $_GET['nome'];
            $rf = $_GET['rf'];
            $email = $_GET['email'];
            $disciplina = $_GET['disciplina'];

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
							<h2>Alterar Professor</h2>
					</div>
					<div id="conteudo" class="col-sm-8">
						<form method="GET" id="altera_professor" action="functionAlteraProfessor.php">
							<div class="form-group">
								<!--<label for="pesquisa">Consulta</label>-->
								ID<input class="form-control" type="text" name="id"  value="<?php echo $id ?>" /><br>
								Nome<input class="form-control" type="text" name="nome" value="<?php echo $nome ?>" /><br>
								RF<input class="form-control" type="text" name="rf" value="<?php echo $rf ?>" /> <br>
								Email<input class="form-control" type="text" name="email" value="<?php echo $email ?>" /> <br>
                                Disciplina<input class="form-control" type="text" name="disciplina" value="<?php echo $disciplina ?>" /> <br>
                                <div class="form-group" id="dia">
                                    <label for="dia">Dia / Período</label><br>
                                    <input type="checkbox" name="id_dia" value="">Segunda - Tarde
                                    <input type="checkbox" name="id_dia2" value="" style="margin-left: 5px;">Segunda - Noite
                                    <input type="checkbox" name="id_dia3" value="" style="margin-left: 5px;">Terça - Tarde
                                    <input type="checkbox" name="id_dia4" value="" style="margin-left: 5px;">Terça - Noite
                                    <input type="checkbox" name="id_dia5" value="" style="margin-left: 5px;">Quarta - Tarde
                                    <input type="checkbox" name="id_dia6" value="" style="margin-left: 5px;">Quarta - Noite<br>
                                    <input type="checkbox" name="id_dia7" value="">Quinta - Tarde
                                    <input type="checkbox" name="id_dia8" value="" style="margin-left: 5px;">Quinta - Noite
                                    <input type="checkbox" name="id_dia9" value="" style="margin-left: 5px;">Sexta - Tarde
                                    <input type="checkbox" name="id_dia10" value="" style="margin-left: 5px;">Sexta - Noite
                                    <input type="checkbox" name="id_dia11" value="" style="margin-left: 5px;">Sábado - Manhã
                                </div>
							</div>

                            <div class="from-group">
                                <button type="submit" class="btn btn-success pull-left">ALTERAR</button>
                                <a href="professores.php"><p class="btn btn-primary pull-right">VOLTAR</p></a>
                                <div class="clearfix"></div>
                            </div>
						</form>
					</div>
			</section>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="../../media/js/jquery-2.2.0.min.js"></script>
	</body>
</html>
