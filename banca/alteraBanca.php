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
        <title>SISGBA | Alterar Banca</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../media/css/main.css" type="text/css"/>

        <?php
            include_once('conexao.php');
            $id = filter_input(INPUT_GET,"id");
            $numero = filter_input(INPUT_GET,"numero");
            $predio = filter_input(INPUT_GET,"predio");
            $andar = filter_input(INPUT_GET,"andar");
            $descricao = filter_input(INPUT_GET,"descricao");
            $capacidade = filter_input(INPUT_GET,"capacidade");
            $computador = filter_input(INPUT_GET,"computador");
            $projetor = filter_input(INPUT_GET,"projetor");
            $som = filter_input(INPUT_GET,"som");


            //$c = (string) $curso;
            mysqli_close($con);
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

<section>
    <div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="altera_sala" action="functionAlteraBanca.php" method="GET" accept-charset="utf-8" class="form" role="form">
                    <h2 class="bold">Alterar Sala</h2><br>
                    <div class="row">

                            <input name="id" hidden value="<?php echo $id;?>"/>

                           <div class="col-xs-6 col-md-4">
                            <label for="predio">Prédio: </label>
                            <select name="predio" default="<?php echo $predio; ?>" class = "form-control input-lg">
                                <option value="<?php echo $predio ?>">Prédio 1</option>
                                <option value="<?php echo $predio ?>">Prédio 2</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <label for="numero">Sala: </label>
                            <input name="numero" class="form-control input-lg" value="<?php echo $numero; ?>" placeholder="nº"/>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <label for="andar">Andar: </label>
                            <select name="andar" value="<?php echo $andar; ?>" class="form-control input-lg" placeholder="and.">
                                <option value="0">Térreo</option>
                                <option value="1">1º andar</option>
                                <option value="2">2º andar</option>
                                <option value="3">3º andar</option>
                            </select>
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col-xs-6 col-md-10">
                            <label for="descricao">Descrição: </label>
                            <input type="text" id="descricao" name="descricao" value="<?php echo $descricao; ?>" class="form-control input-lg"/>

                        </div><br><br>
                        <div class="col-xs-6 col-md-4">
                           <label for="capacidade">Capacidade </label>
                            <input type="number" name="capacidade" value="<?php echo $capacidade; ?>" class="form-control input-lg" placeholder=""  />
                        </div>
                    </div><br>

                    	<div class="row">
                           <label class="col-md-12" for="recursos">Recursos: </label>
                            <div class="col-xs-6 col-md-12 input-lg">
                                <input type="checkbox" name="computador" value="on" checked=<?php $computador ?>/>
                                Computador
                                <input type="checkbox" name="projetor" value="<?php echo $projetor; ?>"/>
                                Projetor
                                <input type="checkbox" name="som" value="<?php echo $som; ?>"/>
                                Equipamento de som
                            </div>
                        </div><br>

                    <div class="form-group">
                            <button type="submit" class="btn btn-success pull-left">ALTERAR</button>
                            <a href="salas.php"><p class="btn btn-primary pull-right">VOLTAR</p></a>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
     </div>
    </section>

		</main>

	<!--SCRIPTS-->
	<script type="text/javascript" src="../mediajs/jquery-2.2.0.min.js"></script>
	</body>
</html>
