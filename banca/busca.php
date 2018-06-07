<!DOCTYPE html>
<html>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SISGBA | Cadastro de Aluno</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../media/css/bootstrap.min.css" type="text/css"/>
		<link rel="stylesheet" href="../media/css/main.css" type="text/css"/>
    </head>
    <body>
        <header>
            <div>
                <img src="../media/images/chapeu.png" id="hat"/>
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
    <div class="container" id="wrap">
	     <?php
            // Verifica se foi feita alguma busca
            // Caso contrario, redireciona o visitante pra home
            include_once('conexao.php');
            if (!isset($_POST['consulta'])) {
              header("Location: /");
              exit;
            }
            // Conecte-se ao MySQL antes desse ponto
            // Salva o que foi buscado em uma variável
            $busca = $_POST['consulta'];
            // ============================================
            // Monta outra consulta MySQL para a busca
            $sql = "SELECT nome FROM professores ORDER BY id DESC";
            // Executa a consulta
            $query = mysqli_query($con,$sql);
            // ============================================
            // Começa a exibição dos resultados
            echo "<ul>";
            while ($resultado = mysqli_fetch_assoc($query)) {
              $nome = $resultado['nome'];

              echo "<li>";
                echo "<h3>{$nome}</h3>";
              echo "</li>";
            }
            echo "</ul>";
        ?>
     </div>
    </section>
    </body>
</html>
