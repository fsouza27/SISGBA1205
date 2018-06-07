<?php
 //Verifica se o usuário está logado
    session_start();

include_once("conexao.php");

    include_once('conexao.php');
    //$id = $_POST['id'];
    //$titulo = $_POST['titulo'];

    $query = "select titulo from tg2";
    $select = mysqli_query($con,$query);

    $query1 = "select a.nome from alunos a, tg2 t where a.id = t.id_aluno1 and t.titulo like '%".$titulo."%'";
    $aluno1t = mysqli_query($con,$query1);

    $query2 = "select a.nome from alunos a, tg2 t where a.id = t.id_aluno2 and t.titulo like '%".$titulo."%'";
    $aluno2 = mysqli_query($con,$query2);

    $query3 = "select a.nome from alunos a, tg2 t where a.id = t.id_aluno3 and t.titulo like '%".$titulo."%'";
    $aluno3 = mysqli_query($con,$query3);

    $query4 = "select a.nome from alunos a, tg2 t where a.id = t.id_aluno4 and t.titulo like '%".$titulo."%'";
    $aluno4 = mysqli_query($con,$query4);

    $query5 = "select t.profOrientador from tg2 t where t.titulo like titulo";
    $prof = mysqli_query($con,$query5);

    $query6 = "select nome from professores";
    $pres = mysqli_query($con,$query6);

    $query7 = "select nome from professores";
    $convidado = mysqli_query($con,$query7);
?>


