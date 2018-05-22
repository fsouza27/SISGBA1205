<?php

include_once('conexao.php');

$id = $_GET['id'];
$numero = $_GET['numero'];
$predio = $_GET['predio'];
$andar = $_GET['andar'];
$descricao = $_GET['descricao'];
$capacidade = $_GET['capacidade'];
$computador = $_GET['computador'];
$projetor = $_GET['projetor'];
$som = $_GET['som'];

//uery = "UPDATE salas SET nome='$nome', ra='$ra', email='$email', curso='$curso' WHERE id='$id'";

$query = "UPDATE salas SET numero='$numero', predio='$predio', andar='$andar', descricao='$descricao', capacidade='$capacidade', computador='$computador', projetor='$projetor', som='$som' WHERE id='$id'";

$update = mysqli_query($con,$query);

    if($update){
      echo"<script language='javascript' type='text/javascript'>alert('Sala alterada com sucesso!');window.location.href='#'</script>";
  }else{
      echo"<sript language='javascript' type='text/javascript'>alert('Não foi possível alterar a sala');window.location.href='#'</script>";
    }

mysqli_close($con);
?>
