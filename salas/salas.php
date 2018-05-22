<?php
//Verifica se o usuário está logado
    session_start();

    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SISGBA | Consulta de Salas</title>
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
    <script src="../media/js/tabelaSalas.js"></script>
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
            echo"<br><a href='login.php'>Faça Login</a> Para ter acesso ao conteúdo";
        }
        ?>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <h1>Consulta de Salas</h1>
        <a href="../homeSalas.php"><h4 >VOLTAR</h4></a>
    </div>
    <br><br>
    <div class="col-md-10 col-md-offset-1">
        <table id="salas" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Código</th>
                <th>Sala</th>
                <th>Prédio</th>
                <th>Andar</th>
                <th>Descrição</th>
                <th>Capacidade</th>
                <th>Computador</th>
                <th>Projetor</th>
                <th>Som</th>
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
