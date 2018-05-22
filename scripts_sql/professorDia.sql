SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";
--
-- Estrutura da tabela `professorDia`
--

CREATE TABLE IF NOT EXISTS `professorDia` (
   `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `rf` int(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `id_dia` int(12) NOT NULL,
  `id_dia2` int(12),
  `id_dia3` int(12),
  `id_dia4` int(12),
  `id_dia5` int(12),
  `id_dia6` int(12),
  `id_dia7` int(12),
  `id_dia8` int(12),
  `id_dia9` int(12),
  `id_dia10` int(12),
  `id_dia11` int(12),
  `senha` varchar(12) NOT NULL,
  FOREIGN KEY (id_dia) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia2) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia3) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia4) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia5) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia6) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia7) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia8) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia9) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia10) REFERENCES dias_semana(id_dia),
  FOREIGN KEY (id_dia11) REFERENCES dias_semana(id_dia)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Populando a tabela professorDia
--


INSERT INTO `professorDia` (`nome`, `rf`, `email`,`disciplina`, `id_dia`, `id_dia2`, `id_dia3`, `id_dia4`, `id_dia5`, `id_dia6`, `id_dia7`, `id_dia8`, `id_dia9`, `id_dia10`, `id_dia11`, `senha`) VALUES
('PAULO SERGIO', '36363636', 'paulo@fatec.org.br','MATEMATICA', 1, 2, 5, 6, 10, NULL, NULL, NULL, NULL, NULL, NULL, 1234),
('OUTRO PROFESSOR', '36363636', 'outro@fatec.org.br','OUTRA MATERIA', 1, 3, 5, 7, 10, 11, NULL, NULL, NULL, NULL, NULL, 1234);


SELECT * FROM professorDia WHERE id_dia LIKE '%3%';
