DELETE FROM `categoria`;

INSERT INTO `categoria` (`cod_categoria`, `nome_categoria`) VALUES
	(1, 'Adulto Feminina'),
	(2, 'Adulto Masculina'),
	(3, 'Infantil Masculina'),
        (4, 'Infantil Feminina');

INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça jeans', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça legging', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta couro', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta jeans', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'moleton', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'casaco', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'sobretudo', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'lingerie', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'saia', '1');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça jeans', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta couro', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta jeans', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'moleton', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'casaco', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'sobretudo', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'cueca', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'bermuda', '2');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça jeans', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta couro', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta jeans', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'moleton', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'casaco', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'sobretudo', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'cueca', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'bermuda', '3');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça jeans', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça legging', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta couro', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'Jaqueta jeans', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'moleton', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'casaco', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'sobretudo', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'lingerie', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'calça', '4');
INSERT INTO `sub_categoria` (`cod_sub_categoria`, `nome_sub_categoria`, `cod_categoria`) VALUES (NULL, 'saia', '4');
INSERT INTO `forma_pagamento` (`cod_pagamento`, `descricao`) VALUES (NULL, 'boleto');
INSERT INTO `forma_pagamento` (`cod_pagamento`, `descricao`) VALUES (NULL, 'cartão de crédito');
INSERT INTO `forma_pagamento` (`cod_pagamento`, `descricao`) VALUES (NULL, 'cartão de débito');

INSERT INTO `administrador` (`cod_admin`, `nome_admin`, `email_admin`, `senha_admin`) VALUES (NULL, 'sanara', 'sanara@gmail.com', MD5('123456'));



INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'casaco amarelo', 'M', 'casaco amarelo vintage_color tamanho M.', '1', '79,90', 'casaco.jpg');

INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'jaquete couro', 'M', 'Jaqueta de couro preta masculina tamanho M.', '2', '129,90', 'jaqueta_couro.jpg');

INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'casaco azul', 'G', 'casaco azul vintage_color tamanho G.', '1', '79,90', 'casaco_azul.jpg');

INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'calça jeans', 'G', 'calça jeans masculina tamanho G.', '2', '59,90', 'calca_m.jpg');

INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'calça moleton', 'P', 'calça infantil rosa lilica tamanho P.', '4', '39,99', 'calca_crianca.jpg');

INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'vestido florido', 'P', 'vestido florido tamanho P.', '4', '55,00', 'vestido_florido.jpg');

INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'camisa carros', 'P', 'camisa carros infantil tamanho P.', '3', '29,90', 'camisa_carros.jpg');

INSERT INTO `produtos` (`cod_produto`, `nome`, `tamanho`, `descricao_detalhada`, `categoria`, `preco`, `imagem_produto`) VALUES (NULL, 'calça jeans infantil', 'p', 'calça jeans infantil tamanho P.', '3', '29,90', 'calca_menino.jpg');

