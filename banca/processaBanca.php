<?php
 //Verifica se o usuário está logado
    session_start();

include_once("conexao.php");

    include_once('conexao.php');
    //$id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $id_autor1 = $_POST['id_autor1'];
    $id_autor2 = $_POST['id_autor2'];
    $id_autor3 = $_POST['id_autor3'];
    $id_autor4 = $_POST['id_autor4'];
    $id_profPresidente = $_POST['id_profPresidente'];
    $profOrientador = $_POST['profOrientador'];
    $id_profConvidado = $_POST['id_profConvidado'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];


    $query = "INSERT INTO `banca` (`titulo`,`id_autor1`,`id_autor2`,`id_autor3`,`id_autor4`, `id_profPresidente`,`profOrientador`,`id_profConvidado`,`data`,`horario`,`local`) VALUES('$titulo','$id_autor1','$id_autor2','$id_autor3','$id_autor4', '$id_profPresidente', '$profOrientador' ,'$id_profConvidado', '$data', '$horario' ,'$local')";
    $insert = mysqli_query($con,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Banca cadastrada com sucesso!');window.location.href='bancas.php'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar!');window.location.href='bancas.php'</script>";
    }

?>


