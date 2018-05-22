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
        <link rel="stylesheet" href="../media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../media/css/main.css" type="text/css"/>



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
							<h2>Alterar Professor</h2>
					</div>
					<div id="conteudo" class="col-sm-8">
						<form class="form-group" method="GET" id="altera_professor" action="functionAlteraProfessor.php">
							<div class="form-group col-lm-8">
								<!--<label for="pesquisa">Consulta</label>-->
								<input class="hide" type="text" name="id"  value="<?php echo $id ?>"/>

                           <div class="row">
                              <div class="col-sm-12 form-group">
                                 <b>Nome</b><input class="form-control" type="text" name="nome" value="<?php echo $nome ?>" /><br>
                              </div>
                           </div>
                            <div class="row">
                                <div class="col-sm-5 form-group">
				    				<b>R.F.</b><input class="form-control" type="text" name="rf" value="<?php echo $rf ?>" />
                                </div>
                                <div class="col-sm-7 form-group">
				                    <b>Email</b><input class="form-control" type="text" name="email" value="<?php echo $email ?>" /> <br>
                                </div>
                            </div>


                            <b>Disciplina</b><input class="form-control" type="text" name="disciplina" value="<?php echo $disciplina ?>" /> <br>


                         <div>
                              <label class="form-group">Titulação</label>
                          </div>

                             <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" name="especialista" value="<?php echo $especialista ?>">Especilista</label>
                             </div>
                             <div class="col-sm-2"><label class="checkbox-inline"><input type="checkbox" name="doutor" value="<?php echo $doutor ?>">Doutor</label>
                             </div>
                             <div class="col-sm-2 "><label class="checkbox-inline"><input type="checkbox" name="mestre" value="<?php echo $mestre ?>">Mestre</label>
                             </div>

                          <br><br>
                          <div>
                              <label class="form-group" for="sel2">Disponibilidade</label>
                          </div>




	<div class="near_by_hotel_wrapper">
                            <div class="near_by_hotel_container">
                                <table id="disponibilidade" class="table table-striped table-bordered" cellspacing="0" width="100%">

                                    <thead>
                                        <tr>
                                            <th>Horário</th>
                                            <th>Seg.</th>
                                            <th>Ter.</th>
                                            <th>Qua.</th>
                                            <th>Qui.</th>
                                            <th>Sex.</th>
                                            <th>Sáb.</th>
                                            <th>Selecionar<br>todos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 08:00 -  09:50</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <span class="checkmark"></span>
                                        </tr>
                                        <tr>
                                            <td> 09:50 - 11:40</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>11:40 - 13:30</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>13:30 - 14:40</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>15:00 - 15:50</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>15:50 - 16:40</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>16:40 - 17:30</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>19:00 - 19:50</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>19:50 - 20:40</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>21:00 - 21:50</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>
                                        <tr>
                                            <td>21:50 - 22:40</td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                            <td><input type="checkbox" /></td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
	</div>




                            <div class="from-group">
                                <button type="submit" class="btn btn-success pull-right">ALTERAR</button>
                                <a href="professores.php"><p class="btn btn-primary pull-right">VOLTAR</p></a>
                                <div class="clearfix"></div>
                            </div>
						</form>
					</div>
                </div>
			</section>
		</main>
	<!--SCRIPTS-->
	<script type="text/javascript" src="../media/js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="../media/js/check_horario.js"></script>
	</body>
</html>
