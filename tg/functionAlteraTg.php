<?php

include_once('conexao.php');

$id = $_GET['id'];
$titulo = $_GET['titulo'];
$curso = $_GET['curso'];
$tipo = $_GET['tipo'];
$profOrientador = $_GET['profOrientador'];
$descricao = $_GET['descricao'];

$query = "UPDATE tg SET titulo='$titulo', curso='$curso', tipo='$tipo', profOrientador='$profOrientador', descricao='$descricao' WHERE id='$id'";

$update = mysqli_query($con,$query);

    if($update){
      echo"<script language='javascript' type='text/javascript'>alert('Trabalho alterado com sucesso!');window.location.href='tg.php'</script>";
  }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível alterar o registro!');window.location.href='tg.php'</script>";
    }

mysqli_close($con);
?>
