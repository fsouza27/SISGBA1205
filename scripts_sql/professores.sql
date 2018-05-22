SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";
--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
   `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `rf` int(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Populando a tabela professores
--
INSERT INTO `professores` (`nome`, `rf`, `email`,`disciplina`, `senha`) VALUES
('PAULO SÉRGIO', '36363636', 'paulo@fatec.org.br','MATEMATICA', 1234),
('ANA PAULA', '87973757', 'anapaula@fatec.org.br', 'PORTUGUES', 1234);



