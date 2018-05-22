SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

--
-- Criando tabela tg
--

CREATE TABLE IF NOT EXISTS `tg` (
  `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `curso` varchar (30) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `profOrientador` varchar(30) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserindo trabalhos na tabela tg
--

INSERT INTO `tg` (`titulo`,`curso`,`tipo`,`profOrientador`,`descricao`) VALUES
('SISGBA','ADS','Web', 'Aragao', 'Sistema Gerenciador de TGs'),
('SIGA','ADS', 'Web', 'Guardado', 'Siga');
