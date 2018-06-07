SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

--
-- Criando tabela banca
--

CREATE TABLE IF NOT EXISTS `banca` (
  `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `id_autor1` int (12) NOT NULL,
  `id_autor2` int (12),
  `id_autor3` int (12),
  `id_autor4` int (12),
  `id_profPresidente` int (12) NOT NULL,
  `profOrientador` varchar(30) NOT NULL,
  `id_profConvidado` int (12) NOT NULL,
  `data` date,
  `horario` time,
  `local` varchar (20)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 /*
  FOREIGN KEY (id_autor1) REFERENCES alunos(id) On Delete Cascade On Update Cascade,
  FOREIGN KEY (id_autor2) REFERENCES alunos(id) On Delete Cascade On Update Cascade,
  FOREIGN KEY (id_autor3) REFERENCES alunos(id) On Delete Cascade On Update Cascade,
  FOREIGN KEY (id_autor4) REFERENCES alunos(id) On Delete Cascade On Update Cascade,
  FOREIGN KEY (id_profPresidente) REFERENCES professores(id) On Delete Cascade On Update Cascade,
  FOREIGN KEY (profOrientador) REFERENCES tg(profOrientador) On Delete Cascade On Update Cascade,
  FOREIGN KEY (id_profConvidado) REFERENCES professores(id) On Delete Cascade On Update Cascade
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/
--
-- Inserindo alunos na tabela banca
--

INSERT INTO `banca` (`titulo`,`id_autor1`,`id_autor2`,`id_autor3`,`id_autor4`, `id_profPresidente`,`profOrientador`,`id_profConvidado`,`data`,`horario`,`local`) VALUES
('BANCA1',1,2,NULL,NULL,1,2,3,'2018-06-30','20:00:00','auditorio'),
('BANCA2',3,4,NULL,NULL,2,3,1,'2018-06-30','20:30:00','auditorio'),
('BANCA3',5,6,NULL,NULL,3,1,2,'2018-06-30','21:00:00','auditorio');
