SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

--
-- Criando tabela tg2
--

CREATE TABLE IF NOT EXISTS `tg2` (
  `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `curso` varchar (30) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `profOrientador` varchar(30) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `id_aluno1` int (12) NOT NULL,
  `id_aluno2` int (12)),
  `id_aluno3` int (12),
  `id_aluno4` int (12),
  FOREIGN KEY (id_aluno1) REFERENCES alunos(id),
  FOREIGN KEY (id_aluno2) REFERENCES alunos(id),
  FOREIGN KEY (id_aluno3) REFERENCES alunos(id),
  FOREIGN KEY (id_aluno4) REFERENCES alunos(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserindo trabalhos na tabela tg2
--

INSERT INTO `tg2` (`titulo`,`curso`,`tipo`,`profOrientador`,`descricao`,`id_aluno1`,`id_aluno2`,`id_aluno3`,`id_aluno4`) VALUES
('SISGBA','ADS','Web', 'Aragao', 'Sistema Gerenciador de TGs',1,2,3,NULL),
('SIGA','ADS', 'Web', 'Guardado', 'Siga',4,NULL,NULL,NULL);
