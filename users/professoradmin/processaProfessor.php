<?php
 //Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: login.php");
        exit;
    }

include_once("conexao.php");

$nome = $_POST['nome'];
$rf = $_POST['rf'];
$email = $_POST['email'];
$disciplina = $_POST['disciplina'];
$senha= $_POST['senha'];
$confSenha = $_POST['confSenha'];

$query_select = "SELECT email FROM professores WHERE email = '$email'";
$select = mysqli_query($con,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

if($confSenha != $senha) {
    echo"<script language='javascript' type='text/javascript'>alert('As senhas não conferem!');window.location.href='cadastroProfessor.php';</script>";
} elseif($email == "" || $email == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido!');window.location.href='cadastroProfessor.php';</script>";
}elseif($logarray == $email){
    echo"<script language='javascript' type='text/javascript'>alert('Esse email já está cadastrado!');window.location.href='cadastroProfessor.php';</script>";
    die();

}else {
    $query = "INSERT INTO professores (nome,rf,email,disciplina,senha) VALUES ('$nome','$rf','$email','$disciplina','$senha')";
    $insert = mysqli_query($con,$query);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Professor cadastrado com sucesso!');window.location.href='professores.php'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastroProfessor.php'</script>";
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
                echo "O cadastro NÂO foi efetuado. <br>Já existe um usuário com este email no sistema!";
            }
            ?>
        </section>
    </div>
</html>
