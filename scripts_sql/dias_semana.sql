SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";
--
-- Estrutura da tabela `dias_semana`
--

CREATE TABLE IF NOT EXISTS `dias_semana` (
   `id_dia` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `dia` varchar(20) NOT NULL,
  `periodo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Populando a tabela dias_semana
--
INSERT INTO `dias_semana` (`dia`, `periodo`) VALUES
('SEGUNDA', 'TARDE'),
('SEGUNDA', 'NOITE'),
('TERCA', 'TARDE'),
('TERCA', 'NOITE'),
('QUARTA', 'TARDE'),
('QUARTA', 'NOITE'),
('QUINTA', 'TARDE'),
('QUINTA', 'NOITE'),
('SEXTA', 'TARDE'),
('SEXTA', 'NOITE'),
('SABADO', 'MANHA');
