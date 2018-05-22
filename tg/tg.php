<?php
    //Verifica se o usuário está logado
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location:sair.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SISGBA | Consulta de Trabalhos</title>
    <!--CSS-->
    <link rel="stylesheet" href="../media/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="../media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../media/css/main.css" type="text/css"/>
    <link rel="stylesheet" href="../media/font-awesome/css/font-awesome.css">
    <!--Javascript-->
    <script src="../media/js/jquery-2.2.0.min.js"></script>
    <script src="../media/js/jquery.dataTables.min.js"></script>
    <script src="../media/js/dataTables.bootstrap.min.js"></script>
    <script src="../media/js/bootstrap.min.js"></script>
    <script src="../media/js/tabelaTg.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>

    <div class="header-user">
        <?php
            $login_cookie = $_COOKIE['email'];
            if(isset($login_cookie)){
                echo"Bem-vindo, <font color='darkBlue'>$login_cookie </font><br>";
            }else{
                echo"Bem-Vindo, convidado <br>";
                echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
                echo"<br><a href='../login.php'>Faça Login</a> Para ter acesso ao conteúdo";
            }
        ?>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <h1>Consulta de Trabalhos Acadêmicos
            <a href="../users/professor/homeProfessor.php">
            <h4 >VOLTAR</h4></a>
        </h1>
    </div>
    <br><br>
    <div class="col-md-10 col-md-offset-1">
        <table id="tg" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Curso</th>
                <th>Tipo</th>
                <th>Professor Orientador</th>
                <th>Descrição</th>
                <th>Editar / Excluir</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</body>
</html>
