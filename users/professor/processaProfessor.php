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
$id_dia = $_POST['id_dia'];
$id_dia2 = $_POST['id_dia2'];
$id_dia3 = $_POST['id_dia3'];
$id_dia4 = $_POST['id_dia4'];
$id_dia5 = $_POST['id_dia5'];
$id_dia6 = $_POST['id_dia6'];
$id_dia7 = $_POST['id_dia7'];
$id_dia8 = $_POST['id_dia8'];
$id_dia9 = $_POST['id_dia9'];
$id_dia10 = $_POST['id_dia10'];
$id_dia11 = $_POST['id_dia11'];

$query_select = "SELECT email FROM professorDia WHERE email = '$email'";
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
    $query = "INSERT INTO professorDia (nome,rf,email,disciplina,id_dia,id_dia2,id_dia3,id_dia4,id_dia5,id_dia6,id_dia7,id_dia8,id_dia9,id_dia10,id_dia11,senha) VALUES ('$nome','$rf','$email','$disciplina',`$id_dia`,`$id_dia2`,`$id_dia3`,`$id_dia4`,`$id_dia5`,`$id_dia6`,`$id_dia7`,`$id_dia8`,`$id_dia9`,
    `$id_dia10`,`$id_dia11`,'$senha')";
    $insert = mysqli_query($con,$query);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Professor cadastrado com sucesso!');window.location.href='professores.php'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='#'</script>";
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
