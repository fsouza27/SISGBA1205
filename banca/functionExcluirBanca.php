<?php

 //Verifica se o usuário está logado
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

include_once('conexao.php');

$id = $_GET['id'];
$query = "DELETE FROM banca WHERE id='$id'";
$insert = mysqli_query($con,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Banca excluída!');window.location.href='alunos.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir a banca');window.location.href='bancas.php'</script>";
    }

?>
