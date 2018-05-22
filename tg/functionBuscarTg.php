<?php

 //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

	include_once ("conexao.php");

    $consulta = "SELECT * FROM tg";

	$registro = mysqli_query($con,$consulta);

	$tabela = "";

	while($row = mysqli_fetch_array($registro)){

		$editar = '<a href=\"alteraTg.php?id='.$row['id'].'&titulo='.$row['titulo'].'&curso='.$row['curso'].'&tipo='.$row['tipo'].'&profOrientador='.$row['profOrientador'].'&descricao='.$row['descricao'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

        $deletar = '<a href=\"excluiTg.php?id='.$row['id'].'\" onclick=\"return confirm(\'Deseja relamente excluir este trabalho?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Excluir\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

		$tabela.='{
        "id":"'.$row['id'].'",
        "titulo":"'.$row['titulo'].'",
        "curso":"'.$row['curso'].'",
        "tipo":"'.$row['tipo'].'",
        "profOrientador":"'.$row['profOrientador'].'",
        "descricao":"'.$row['descricao'].'",
        "acciones":"'.$editar." ".$deletar.'"},';

	}

	//elimina a vírgula que sobra
	$tabela = substr($tabela,0, strlen($tabela) - 1);

	echo '{"data":['.$tabela.']}';

?>
