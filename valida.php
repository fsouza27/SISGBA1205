<?php
  session_start();
  include_once("conexao.php");
  // Campos para pegar dados do profadmin

  $emailProfA = $_POST['email'];
  $senhaProfA = $_POST['senha'];

  $sqlProfA="SELECT * FROM profadmin WHERE email='$emailProfA' AND senha='$senhaProfA' LIMIT 1";
  $resultProfA=mysqli_query($con,$sqlProfA);

  $resultadoProfA = mysqli_fetch_assoc($resultProfA);

  // Campos para pegar dados do professor
  $emailProfessor = $_POST['email'];
  $senhaProfessor = $_POST['senha'];

  $sqlProfessor="SELECT * FROM professores WHERE email='$emailProfessor' AND senha='$senhaProfessor' LIMIT 1";
  $resultProfessor=mysqli_query($con,$sqlProfessor);

  $resultadoProfessor = mysqli_fetch_assoc($resultProfessor);

  // Campos para pegar dados do aluno
  $emailAluno = $_POST['email'];
  $senhaAluno = $_POST['senha'];

  $sqlAluno="SELECT * FROM alunos WHERE email='$emailAluno' AND senha='$senhaAluno' LIMIT 1";
  $resultAluno=mysqli_query($con,$sqlAluno);

  $resultadoAluno = mysqli_fetch_assoc($resultAluno);

  if($resultadoAluno){
      setcookie("email",$resultadoAluno['nome']);
        $_SESSION['emailSession'] = $emailAluno;
        $_SESSION['senhaSession'] = $senhaAluno;

      header("Location:users/aluno/homeAluno.php");
  } elseif ($resultadoProfessor){
	  setcookie("email",$resultadoProfessor['nome']);
        $_SESSION['emailSession'] = $emailProfessor;
        $_SESSION['senhaSession'] = $senhaProfessor;

      header("Location:users/professor/homeProfessor.php");
  } elseif ($resultadoProfA){
	  setcookie("email",$resultadoProfA['nome']);
        $_SESSION['emailSession'] = $emailProfA;
        $_SESSION['senhaSession'] = $senhaProfA;

      header("Location:users/professoradmin/homeAdmin.php");
  } else {
	  //Mensagem de erro
		$_SESSION['loginErro']="Usuário ou senha inválidos!";
		echo"<script language='javascript' type='text/javascript'>alert('Login ou senha incorretos');window.location.href='login.php';</script>";
		die();
	}

  mysqli_close($con);
?>
