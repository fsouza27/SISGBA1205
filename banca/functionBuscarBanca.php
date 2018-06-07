<?php

  //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

	include ("conexao.php");
	$consulta = "SELECT * FROM banca ";
	$registro = mysqli_query($con,$consulta);
	$tabela = "";

	while($row = mysqli_fetch_array($registro)){


      	$editar = '<a href=\"alteraBanca.php?id='.$row['id'].'&titulo='.$row['titulo'].'&id_autor1='.$row['id_autor1'].'&id_autor2='.$row['id_autor2'].'&id_autor3='.$row['id_autor3'].'&id_autor4='.$row['id_autor4'].'&id_profPresidente='.$row['id_profPresidente'].'&profOrientador='.$row['profOrientador'].'&id_profConvidado='.$row['id_profConvidado'].'&data='.$row['data'].'&horario='.$row['horario'].'&local='.$row['local'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

        $deletar = '<a href=\"excluirBanca.php?id='.$row['id'].'\" onclick=\"return confirm(\'Deseja relamente deletar este registro?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Excluir\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';

 		$tabela.='{
        "id":"'.$row['id'].'",
        "titulo":"'.$row['titulo'].'",
        "id_autor1":"'.$row['id_autor1'].'",
        "id_autor2":"'.$row['id_autor2'].'",
        "id_autor3":"'.$row['id_autor3'].'",
        "id_autor4":"'.$row['id_autor4'].'",
        "id_profPresidente":"'.$row['id_profPresidente'].'",
        "profOrientador":"'.$row['profOrientador'].'",
        "id_profConvidado":"'.$row['id_profConvidado'].'",
        "data":"'.$row['data'].'",
        "horario":"'.$row['horario'].'",
        "local":"'.$row['local'].'",
        "acciones":"'.$editar." ".$deletar.'"},';
	}

	$tabela = substr($tabela,0, strlen($tabela) - 1);
	echo '{"data":['.$tabela.']}';


?>
