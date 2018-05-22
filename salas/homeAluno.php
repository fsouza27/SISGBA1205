<?php
    //Verifica se o usuário está logado
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header("Location: sair.php");
        exit;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA | Home Aluno</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../../media/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="../../media/css/main.css" type="text/css"/>
    </head>
    <body>
        <header>
            <div>
                <img src="../../media/images/chapeu.png" id="hat"/>
            </div>
            <div>
                <h3>
                    <span class="bold">SISGBA</span>
                </h3>
                <h4>
                Sistema Gerenciador de Bancas Acadêmicas Web
                </h4>
            </div>
        </header>
        <section>
            <nav>
                <ul class="menu-home">
                    <a href="#.php"><li><h5>Meu cadastro</h5></li></a>
                    <a href="#"><li><h5>Meu Trabalho Acadêmico</h5></li></a>
                    <a href="#"><li><h5>Pesquisa de Trabalhos Acadêmicos</h5></li></a>
                    <a href="sair.php"><li><h5>Sair</h5></li></a>
                </ul>
            </nav>
        </section>
        <section class="secao-usuario">
            <h1>
            <?php
                $login_cookie = $_COOKIE['email'];
                if(isset($login_cookie)){
                    echo"Olá, <font color='darkBlue'>$login_cookie </font><br>";
                }else{
                    echo"Bem-Vindo, convidado <br>";
                    echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
                    echo"<br><a href='login.php'>Faça Login</a> Para ter acesso ao conteúdo";
                }
            ?>
            </h1>
            <h2>Seção onde irá conter dados do aluno...</h2>
        </section>
    </body>
</html>
