-- --------------------------------------------------------
-- Servidor:                     Localhost
-- Versão do servidor:           10.1.25-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para estagio
CREATE DATABASE IF NOT EXISTS `estagio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `estagio`;

-- Copiando estrutura para tabela estagio.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estagio.admin: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `nome`, `cpf`, `cargo`, `email`, `senha`) VALUES
	(1, 'Paulo TomÃ©', '01598663089', 'Programador', 'paulo@gmail.com', '3869031fd86183faefcd8fd810a1e523'),
	(2, 'JosÃ© Augusto', '012035488620', 'Analista', 'ze@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(3, 'Vilson Rodrigues', '01452145782', 'Analista', 'vilson@gmail.com', '202cb962ac59075b964b07152d234b70'),
	(4, 'Paulo TomÃ© Gomes de Vargas', '01598663089', 'Continuo', 'paulotomegomesdevargas@gmail.com', '3869031fd86183faefcd8fd810a1e523');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Copiando estrutura para tabela estagio.animais
CREATE TABLE IF NOT EXISTS `animais` (
  `idanimal` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rebanho_id` int(11) unsigned NOT NULL,
  `especie` varchar(255) DEFAULT NULL,
  `numero_brincos` int(11) unsigned DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `raca` varchar(255) DEFAULT NULL,
  `pelagem` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) NOT NULL,
  `prenhez` varchar(50) DEFAULT NULL,
  `peso` float(11,2) DEFAULT NULL,
  `foto` blob,
  `descricao` text,
  PRIMARY KEY (`idanimal`,`rebanho_id`),
  KEY `animais_FKIndex2` (`rebanho_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estagio.animais: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `animais` DISABLE KEYS */;
INSERT INTO `animais` (`idanimal`, `rebanho_id`, `especie`, `numero_brincos`, `data_nascimento`, `status`, `raca`, `pelagem`, `sexo`, `prenhez`, `peso`, `foto`, `descricao`) VALUES
	(1, 11, 'TESTE', 0, '2018-03-20', 'Morto', 'TESTE', 'TESTE', 'M', NULL, 1.00, NULL, 'TESTE'),
	(2, 1, 'BOVINO', 150, '2018-01-05', 'Em Campo', 'Angus', 'Colorado', 'FÃªmea', 'Vazia', 520.00, NULL, 'Filha da 156.'),
	(3, 1, 'Bovino', 153, '2017-12-08', 'Em Campo', 'Angus', 'Colorado', 'Macho', 'Vazia', 230.00, NULL, 'Teste'),
	(4, 9, 'BOVINO', 215, '2018-05-05', 'Em Campo', 'Angus', 'Colorado', 'FÃªmea', 'Prenha', 360.00, NULL, 'Passou por exame de toque.');
/*!40000 ALTER TABLE `animais` ENABLE KEYS */;

-- Copiando estrutura para tabela estagio.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf_cnpj` varchar(25) DEFAULT NULL,
  `inscricao_est` varchar(255) DEFAULT NULL,
  `num_usuarios` int(10) unsigned DEFAULT NULL,
  `dta_inclu` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estagio.cliente: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nome_cliente`, `endereco`, `cidade`, `estado`, `telefone`, `email`, `cpf_cnpj`, `inscricao_est`, `num_usuarios`, `dta_inclu`) VALUES
	(1, 'Paulo Vargas', 'Porteira Sete', 'Cachoeira do Sul', 'RS', '51 37232335', 'paulo@gmail.com', '01598663089', '0150138806', 2, '2017-11-04 20:16:39'),
	(2, 'Rosangela Bordignon', 'Passo do Moura', 'Cachoeira do Sul', 'RS', '51 37222222', 'rosangela@gmail.com', '0140124578', '0120450125', 1, '2017-11-04 22:35:27');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela estagio.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `idevenR` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rebanho_id` int(11) unsigned NOT NULL,
  `animal_id` int(11) unsigned DEFAULT NULL,
  `evento_grupo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `local` text,
  `data_evento` date NOT NULL,
  `descri` text,
  `obser` text,
  PRIMARY KEY (`idevenR`),
  KEY `eventos_rebanho_FKIndex1` (`rebanho_id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`rebanho_id`) REFERENCES `rebanho` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idanimal` FOREIGN KEY (`animal_id`) REFERENCES `animais` (`idanimal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estagio.eventos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` (`idevenR`, `rebanho_id`, `animal_id`, `evento_grupo`, `nome`, `local`, `data_evento`, `descri`, `obser`) VALUES
	(1, 10, 1, 1, 'VerificaÃ§Ã£o', 'Piquete 1', '2018-05-26', 'Verificar infestaÃ§Ã£o de carrapatos.', 'observação'),
	(2, 1, 1, 1, 'NumeraÃ§Ã£o', 'Mangueira da Sede', '2018-05-26', 'Colocar os brincos para identificaÃ§Ã£o.', 'observação'),
	(3, 1, 1, 1, 'Aparte', 'Mangueira da Sede', '2018-05-26', 'Separa terneiros de suas mÃ£es.', 'observação'),
	(4, 3, 1, 1, 'VerificaÃ§Ã£o', 'Piquete 2', '2018-05-26', 'VerificaÃ§Ã£o de possÃ­vel perda de brincos.', 'observação'),
	(5, 1, 2, 2, 'Teste', 'teste', '2018-05-26', 'Testando', 'observação');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

-- Copiando estrutura para tabela estagio.rebanho
CREATE TABLE IF NOT EXISTS `rebanho` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(10) unsigned NOT NULL,
  `nomeRebanho` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `descriRebanho` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rebanho_FKIndex1` (`cliente_id`),
  CONSTRAINT `rebanho_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estagio.rebanho: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `rebanho` DISABLE KEYS */;
INSERT INTO `rebanho` (`id`, `cliente_id`, `nomeRebanho`, `descriRebanho`) VALUES
	(1, 2, 'Terneiros Novos', 'AtÃ© 1 ano de idade.'),
	(3, 2, 'Terneiros', 'De 1 ano a 2 anos de idade.'),
	(8, 2, 'Novilha/Boi', 'De 2 a 3 anos.'),
	(9, 2, 'Vaca', 'Acima de 3 anos de idade.'),
	(10, 2, 'Machos Reprodutores', 'Acima de 3 anos de idade.'),
	(11, 2, 'Teste', 'Teste');
/*!40000 ALTER TABLE `rebanho` ENABLE KEYS */;

-- Copiando estrutura para tabela estagio.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(10) unsigned NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idusu`),
  KEY `usuario_FKIndex1` (`cliente_id`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela estagio.usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idusu`, `cliente_id`, `nome`, `email`, `senha`) VALUES
	(1, 2, 'Rosangela', 'bordignon503@gmail.com', '3869031fd86183faefcd8fd810a1e523'),
	(2, 1, 'Tiago', 'tiago@gmail.com', '3869031fd86183faefcd8fd810a1e523'),
	(3, 2, 'Daniel', 'daniel@gmail.com', '3869031fd86183faefcd8fd810a1e523');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
