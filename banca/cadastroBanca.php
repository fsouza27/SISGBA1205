<!DOCTYPE html>
<html>

    <?php
            include_once('conexao.php');
            $id = filter_input(INPUT_GET,"id");
            $titulo = filter_input(INPUT_GET,"titulo");
            $id_autor1 = filter_input(INPUT_GET,"id_autor1");
            $id_autor2 = filter_input(INPUT_GET,"id_autor2");
            $id_autor3 = filter_input(INPUT_GET,"id_autor3");
            $id_autor4 = filter_input(INPUT_GET,"id_autor4");
            $profOrientador = filter_input(INPUT_GET,"profOrientador");
        ?>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA | Cadastro de Banca</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../media/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="../media/css/main.css" type="text/css"/>
    </head>
    <body>
        <?php include "selectBanca.php";?>

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
    <section>
    <div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="cadastro_sala" action="processaBanca.php" method="post" accept-charset="utf-8" class="form" role="form">
                    <h2 class="bold">Agendar Banca</h2><br>
                    <div class="row">
                        <div class="col-xs-6 col-md-12">
                            <label for="titulo">Titulo: </label>
                            <select id="titulo" class="form-control input-sm">
                                <?php while($row1 = mysqli_fetch_array($select)):;?>
                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
                                <?php endwhile;?>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-xs-6 col-md-12">
                            <label for="autores">Autores: </label>
                            <input name="id_autor1" class="form-control input-sm" />
                            <input name="id_autor2" class="form-control input-sm" />
                            <input name="id_autor3" class="form-control input-sm" />
                            <input name="id_autor4" class="form-control input-sm" />
                        </div><br><br>

                        <div class="col-xs-6 col-md-12">
                            <br><label for="presidente">Prof. Presidente: </label>
                            <select name="id_profPresidente" class="form-control input-sm">
                                <?php while($row1 = mysqli_fetch_array($pres)):;?>
                                    <option id= 'titulo' value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
                                <?php endwhile;?>
                            </select>
                        </div><br>

                        <div class="col-xs-6 col-md-12">
                            <br><label for="profOrientador">Prof. Orientador: </label>
                            <get name="profOrientador"  class="form-control get-lg" />
                        </div><br>

                       <div class="col-xs-6 col-md-12">
                            <br><label for="convidado">Prof. Convidado: </label>
                            <select name="id_profConvidado" class="form-control input-sm">
                                <?php while($row1 = mysqli_fetch_array($convidado)):;?>
                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
                                <?php endwhile;?>
                            </select>
                        </div><br>

                     	<div class="row">
                            <div class="col-xs-6 col-md-10">
                            <label class="col-md-12" for="">Apresentação de Banca</label>
                            </div>
                            <div class="col-xs-6 col-md-3">
                            <label class="col-md-12" for="data">Data: </label>
                                <input type="date" name="data" value="" class="form-control input-sm"/>
                            </div><br><br>
                            <div class="col-xs-4 col-md-3">
                               <label class="col-md-12" for="horario">Horário: </label>
                                <input type="time" name="horario" value="" class="form-control input-sm" placeholder=""  />
                            </div>
                            <div class="col-xs-8 col-md-6">
                               <label class="col-md-12" for="local">Local: </label>
                                <select class="form-control input-sm" name="local">
                                    <option name="lab1" value="lab1" class="form-control input-sm" >Laboratório 1</option>
                                    <option name="lab2" value="lab2" class="form-control input-sm" >Laboratório 2</option>
                                    <option name="lab3" value="lab3" class="form-control input-sm" >Laboratório 3</option>
                                    <option name="lab4" value="lab4" class="form-control input-sm" >Laboratório 4</option>
                                    <option name="auditorio" value="auditorio" class="form-control input-lg">Auditório </option>

                                </select>
                            </div>
                        </div><br>

                    <div class="form-group">
                            <button type="submit" class="btn btn-success pull-left">Agendar</button>
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
