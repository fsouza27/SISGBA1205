<?php

include_once('conexao.php');

$id = $_GET['id'];
$titulo = $_GET['titulo'];
$id_autor1 = $_GET['id_autor1'];
$id_autor2 = $_GET['id_autor2'];
$id_autor3 = $_GET['id_autor3'];
$id_autor4 = $_GET['id_autor4'];
$id_profPresidente = $_GET['id_profPresidente'];
$profOrientador = $_GET['profOrientador'];
$id_profConvidado = $_GET['id_profConvidado'];
$data = $_GET['data'];
$horario = $_GET['horario'];
$local = $_GET['local'];

//uery = "UPDATE banca SET nome='$nome', ra='$ra', email='$email', curso='$curso' WHERE id='$id'";

$query = "UPDATE banca SET id_profPresidente='$id_profPresidente', id_profConvidado='$id_profConvidado', data='$data', horario='$horario' WHERE id='$id'";

$update = mysqli_query($con,$query);

    if($update){
      echo"<script language='javascript' type='text/javascript'>alert('Sala alterada com sucesso!');window.location.href='#'</script>";
  }else{
      echo"<sript language='javascript' type='text/javascript'>alert('Não foi possível alterar a sala');window.location.href='#'</script>";
    }

mysqli_close($con);
?>
