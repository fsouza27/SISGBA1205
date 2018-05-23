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
                    <h2 class="bold">Agendar Banca</h2><br>
                    <div class="row">
                        <div class="col-xs-6 col-md-12">
                            <label for="tema">Tema do TCC: </label>
                             <input type="text" name="tema" class="form-control input-lg" value=""/>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-xs-6 col-md-12">
                            <label for="autores">Autores: </label>
                            <input name="autores" class="form-control input-lg" />
                        </div><br>
                        <div class="col-xs-6 col-md-4">
                            <label for="orientador">Prof. Orientador: </label>
                            <select name="orientador" value="" class="form-control input-lg">
                                <option value="0">Térreo</option>
                                <option value="1">1º andar</option>
                                <option value="2">2º andar</option>
                                <option value="3">3º andar</option>
                            </select>
                        </div><br>

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
