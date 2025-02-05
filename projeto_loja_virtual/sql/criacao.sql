CREATE TABLE IF NOT EXISTS `cidade`(
`cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
`nome` varchar(100) DEFAULT NULL,
`estado` int(11) DEFAULT NULL,
 PRIMARY KEY (`cod_cidade`),
 KEY `estado` (`estado`)
)ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `forma_pagamento`(
`cod_pagamento` int(11) NOT NULL AUTO_INCREMENT,
`descricao` varchar(100) DEFAULT NULL,
PRIMARY KEY (`cod_pagamento`)
)ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `categoria` (
  `cod_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(60) DEFAULT NULL,
   PRIMARY KEY (`cod_categoria`)   
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `sub_categoria` (
  `cod_sub_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_sub_categoria` varchar(60) DEFAULT NULL,
  `cod_categoria` int(11) DEFAULT NULL,
    PRIMARY KEY (`cod_sub_categoria`),
    KEY `cod_categoria` (`cod_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cidade` int(11) NOT NULL ,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `endereco_entrega` varchar(80) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `cpf` varchar(80) DEFAULT NULL,
  `rg` varchar(80) DEFAULT NULL,
  `data_nascimento` varchar(80) DEFAULT NULL,  
  `cep` varchar(80) DEFAULT NULL,
  `telefone_celular` varchar(80) DEFAULT NULL,
  `telefone_fixo` varchar(80) DEFAULT NULL,
  `senha_usuario` varchar(60) DEFAULT NULL,
  `numero` varchar(80) DEFAULT NULL,
  `imagem_usuario` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`cod_usuario`),
  KEY `cod_cidade` (`cod_cidade`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `status`(
`cod_status` int(11) NOT NULL AUTO_INCREMENT,
`situacao` varchar(100) DEFAULT NULL,
PRIMARY KEY (`cod_status`)
)ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `administrador` (
  `cod_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nome_admin` varchar(50) DEFAULT NULL,
  `email_admin` varchar(100) DEFAULT NULL,
  `senha_admin` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`cod_admin`)    
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `produtos` (
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `tamanho` varchar(100) DEFAULT NULL,
  `descricao_detalhada` varchar(100) DEFAULT NULL,  
  `categoria` int(11) NOT NULL,
  `preco` varchar(100) DEFAULT NULL,
  `imagem_produto` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`cod_produto`),
  KEY `categoria`(`categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pedido` (
  `cod_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `cod_email` int(11) NOT NULL,
  `cod_pagamento` int(11) NOT NULL,
  `cod_status` int(11) DEFAULT NULL,
  `frete` double NULL,
  `total` double NULL,
  `data` Date  NULL,
  PRIMARY KEY (`cod_pedido`),
  KEY `cod_email` (`cod_email`),
  KEY `cod_pagamento` (`cod_pagamento`),
  KEY `cod_status` (`cod_status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `itens_pedido` (
  `cod_itens` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) NOT NULL,
  `cod_pedido` int(11) NOT NULL,
  `quantidade` int(255) NOT NULL,
  PRIMARY KEY (`cod_itens`),
  KEY `cod_pedido` (`cod_pedido`),
  KEY `cod_produto` (`cod_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `estado` (
  `cod_estado` int(11) NOT NULL AUTO_INCREMENT,
  `uf` varchar(10) NOT NULL  ,
  `nome` varchar(20) NOT NULL ,
  PRIMARY KEY  (`cod_estado`)
)  ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


CREATE TABLE `tb_cidades` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `cod_estado` int(2) unsigned zerofill NOT NULL ,
  `uf` varchar(4) NOT NULL ,
  `nome` varchar(50) NOT NULL ,
  PRIMARY KEY  (`cod_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;