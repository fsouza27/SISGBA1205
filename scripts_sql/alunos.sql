SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

--
-- Criando tabela Alunos
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `ra` varchar (20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `curso` varchar(150) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserindo alunos na tabela alunos
--

INSERT INTO `alunos` (`nome`,`ra`,`email`,`curso`,`senha`) VALUES
('Lucas Naldo','123456789','lucas_naldo@hotmail.com', 'ADS', '1234'),
('adm','11111111', 'adm', 'ADM', '1234');

