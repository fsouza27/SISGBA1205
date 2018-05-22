<!DOCTYPE html>
<html>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA | Cadastro de Aluno</title>
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
    <div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="cadastro_sala" action="processaSala.php" method="post" accept-charset="utf-8" class="form" role="form">
                    <h2 class="bold">Cadastrar Sala</h2><br>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <label for="nome">Prédio: </label>
                            <select name="predio" class = "form-control input-lg">
                                <option value="01">Prédio 1</option>
                                <option value="02">Prédio 2</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <label for="sala">Sala: </label>
                            <input name="numero" class = "form-control input-lg" placeholder="nº"/>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <label for="andar">Andar: </label>
                            <select name="andar" value="" class="form-control input-lg" placeholder="Prédio">
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
                            <textarea rows="3" name="descricao" value="" class="form-control input-sm"></textarea>
                        </div><br><br>
                        <div class="col-xs-6 col-md-4">
                           <label for="capacidade">Capacidade </label>
                            <input type="number" name="capacidade" value="" class="form-control input-lg" placeholder=""  />
                        </div>
                    </div><br>

                    	<div class="row">
                           <label class="col-md-12" for="capacidade">Recursos: </label>
                            <div class="col-xs-6 col-md-12 input-lg">
                                <input type="checkbox" id="computador "name="computador"/>
                                Computador
                                <input type="checkbox" id="projetor" name="projetor"/>
                                Projetor
                                <input type="checkbox" id="som" name="som"/>
                                Equipamento de som
                            </div>
                        </div><br>

                    <div class="form-group">
                            <button type="submit" class="btn btn-success pull-left">CADASTRAR</button>
                            <a href="salas.php"><p class="btn btn-primary pull-right">VOLTAR</p></a>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
     </div>
    </section>
    </body>
</html>
