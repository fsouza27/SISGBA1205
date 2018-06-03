select a.name, a.email, t.titulo, t.descricao from alunos a, tg2 t where a.id = t.id_aluno1
OR a.id = id_aluno2
OR a.id = id_aluno3
OR a.id = id_aluno4;


SELECT * FROM professorDia WHERE id_dia LIKE '%3%';
