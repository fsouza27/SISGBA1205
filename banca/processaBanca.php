<?php
 //Verifica se o usuário está logado
    session_start();

include_once("conexao.php");

    include_once('conexao.php');
    //$id = $_POST['id'];
    $numero = $_POST['numero'];
    $predio = $_POST['predio'];
    $andar = $_POST['andar'];
    $descricao = $_POST['descricao'];
    $capacidade = $_POST['capacidade'];
    $computador = $_POST['computador'] = ( isset($_POST['computador']) ) ? true : 0;
    $projetor = $_POST['projetor']  = ( isset($_POST['projetor']) )  ? true : 0;
    $som = $_POST['som']  = ( isset($_POST['som']) )  ? true : 0;


    $query = "INSERT INTO salas (numero, predio, andar, descricao, capacidade, computador, projetor, som) VALUES ('$numero','$predio','$andar','$descricao','$capacidade', '$computador', '$projetor' ,'$som')";
    $insert = mysqli_query($con,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Sala cadastrada com sucesso!');window.location.href='salas.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar!');window.location.href='#'</script>";
    }



?>


