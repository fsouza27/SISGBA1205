SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";
--
-- Estrutura da tabela `professores admin`
--

CREATE TABLE IF NOT EXISTS `profadmin` (
   `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `rf` int(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Populando a tabela professores admin
--
INSERT INTO `profadmin` (`nome`, `rf`, `email`,`disciplina`, `senha`) VALUES
('Ana Claudia', '000000000', 'anaclaudia@fatec.org.br','Coordenadora', 1234),
('admin', '87973757', 'admin@sisgba.com', 'admin', 'admin');



