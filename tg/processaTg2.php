<?php
 //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['tipoSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location:login.php");
        exit;
    }

include_once("conexao.php");

$titulo = $_POST['titulo'];
$curso = $_POST['curso'];
$tipo = $_POST['tipo'];
$profOrientador = $_POST['profOrientador'];
$descricao = $_POST['descricao'];
$id_aluno1 = $_POST['id_aluno1'];
$id_aluno2 = $_POST['id_aluno2'];
$id_aluno3 = $_POST['id_aluno3'];
$id_aluno4 = $_POST['id_aluno4'];

$query_select = "SELECT titulo FROM tg WHERE titulo = '$titulo'";
$select = mysqli_query($con,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['titulo'];

if($titulo == "" || $titulo == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo titulo deve ser preenchido!');window.location.href='cadastroTg.php';</script>";
}elseif($logarray == $titulo){
    echo"<script language='javascript' type='text/javascript'>alert('Esse titulo já está cadastrado!');window.location.href='cadastroTg.php';</script>";
    die();

}else {
    $query = "INSERT INTO tg (titulo,curso,tipo,profOrientador,descricao,id_aluno1,id_aluno2,id_aluno3,id_aluno4) VALUES ('$titulo','$curso','$tipo','$profOrientador','$descricao','$id_aluno1','$id_aluno2','$id_aluno3','$id_aluno4')";
    $insert = mysqli_query($con,$query);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Trabalho cadastrado com sucesso!');window.location.href='cadastroTg.php'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse trabalho');window.location.href='cadastroTg.php'</script>";
        }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/estilo.css">
    </head>

<body class="cover">

</body>
    <div class="container">
        <section>
            <h1>Confirmação de cadastro</h1>
            <hr><br><br>
            <?php
            if($linhas == 1){
                echo "Cadastro efetuado com sucesso!";
            }else{
                echo "O cadastro NÂO foi efetuado. <br>Já existe um trabalho com este tipo no sistema!";
            }
            ?>
        </section>
    </div>
</html>
