-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12-Fev-2022 às 17:33
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(90) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `tempo_preparo` varchar(250) NOT NULL,
  `dificuldade` varchar(10) NOT NULL,
  `porcoes` varchar(250) NOT NULL,
  `ingredientes` varchar(500) NOT NULL,
  `modo_preparo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `categoria_id`, `titulo`, `descricao`, `tempo_preparo`, `dificuldade`, `porcoes`, `ingredientes`, `modo_preparo`) VALUES
(49, 1, 'Torta de Liquidificador ', 'Torta de Liquidificador  carne', '120', 'facil', '14', '    2 xícaras (chá) de Leite Líquido NINHO® Forti+ Integral\r\n    3 ovos\r\n    1 xícara (chá) de óleo\r\n    1 MAGGI® Creme de Cebola com Queijo\r\n    2 xícaras (chá) de farinha de trigo\r\n    1 colher (sopa) de fermento em pó\r\n    1 xícara (chá) de tomates-cereja cortados ao meio\r\n    2 xícaras (chá) de brócolis picado\r\n    2 colheres (sopa) de orégano fresco\r\n    1 xícara (chá) de queijo minas em cubinhos\r\n\r\n', 'Em um liquidificador, bata o Leite NINHO, os ovos, o óleo e o MAGGI Creme de Cebola.\r\n\r\nTransfira para um recipiente e acrescente aos poucos a farinha de trigo e o fermento em pó.\r\n\r\nDespeje a massa em um recipiente refratário médio untado (20 x 30 cm).\r\n\r\nColoque sobre a massa os tomates, o brócolis, o orégano e o queijo. Leve para assar em forno médio alto (200°C), preaquecido, por cerca de 50 minut'),
(50, 2, 'Bolo de Cenoura', 'Bolo de Cenoura  com chocolate', '55', 'medio', '12', '\r\nMassa do Bolo\r\n\r\n    3 cenouras médias (250g)\r\n    4 ovos\r\n    meia xícara (chá) de óleo\r\n    2 e meia xícaras (chá) de farinha de trigo\r\n    2 xícaras (chá) de açúcar\r\n    1 colher (sopa) de fermento em pó\r\n\r\nCobertura de Brigadeiro\r\n\r\n    1 Leite MOÇA® (lata ou caixinha) 395g\r\n    1 colher (sopa) de manteiga\r\n    meia xícara (chá) de Chocolate em Pó NESTLÉ® DOIS FRADES®\r\n    meia xícara (chá) de chocolate gr', 'Em um liquidificador, bata as cenouras, os ovos e o óleo.\r\n\r\nDespeje a mistura em um recipiente e misture o açúcar e a farinha de trigo peneirada com o fermento.\r\n\r\nColoque em uma fôrma retangular (20 x 30 cm) untada, e leve ao forno médio (180°C), preaquecido, por 40 minutos.\r\n\r\nEnquanto isso, prepare a cobertura de brigadeiro.\r\nCobertura de Brigadeiro\r\n\r\nEm uma panela coloque o Leite MOÇA, o Chocolate em'),
(51, 3, 'Bife a Parmegiana ', 'Bife à Parmegiana ', '120', 'medio', '8', '\r\n    4 bifes de patinho (cerca de 100g cada)\r\n    1 sachê de MAGGI® MEU SEGREDO® Refoga\r\n    2 ovos\r\n    1 pitada de sal\r\n    1 pitada de pimenta-do-reino\r\n    1 pitada de orégano\r\n    meia xícara (chá) de farinha de trigo\r\n    1 xícara (chá) de farinha de rosca\r\n    meia xícara (chá) de molho de tomate\r\n    6 fatias de queijo mozarela\r\n\r\n', '\r\nEm um recipiente tempere os bifes com o MAGGI MEU SEGREDO.\r\n\r\nEm outro recipiente bata levemente os ovos e tempere com sal, pimenta e orégano.\r\n\r\nEm seguida, passe os bifes, um a um, pela farinha de trigo, pelos ovos batidos e pela farinha de rosca.\r\n\r\nEm uma assadeira untada com azeite, distribua os bifes e cubra com mais um pouco de azeite.\r\n\r\nLeve para assar por cerca de 30 minutos, em forno médio-al'),
(52, 4, 'Panqueca de Carne Moída', 'Panqueca de Carne Moída com Molho ', '55', 'medio', '10', 'Massa\r\n\r\n    1 e meia xícara (chá) de Leite Líquido NINHO® Forti+ Integral\r\n    1 xícara (chá) de farinha de trigo\r\n    1 colher (sopa) de óleo\r\n    1 pitada de sal\r\n    3 ovos\r\n\r\nRecheio\r\n\r\n    1 colher (sopa) de óleo\r\n    500 g de carne moída\r\n    1 colher (sopa) de MAGGI® Gril\r\n    meia xícara (chá) de água\r\n    1 colher (sopa) de farinha de trigo\r\n    1 tomate sem pele e sem sementes, picado\r\n    1 colher (s', 'Massa\r\n\r\nEm um liquidificador, bata o Leite NINHO com a farinha de trigo, o óleo, o sal e os ovos.\r\n\r\nAqueça uma frigideira untada e coloque pequenas porções de massa.\r\n\r\nDeixe dourar levemente dos dois lados.\r\n\r\nRepita a operação até terminar a massa. Reserve.\r\nRecheio\r\n\r\nEm uma panela, aqueça o óleo e junte a carne moída.\r\n\r\nTempere com o MAGGI Gril e refogue bem até ficar soltinha.\r\n\r\nJunte a água e os demai'),
(53, 5, 'Moqueca de Peixe ', 'Moqueca de Peixe ', '170', 'dificil', '6', '\r\n    1 quilo de peixe em postas (garoupa ou cação)\r\n    2 colheres (sopa) de MAGGI® Fondor\r\n    3 colheres (sopa) de suco de limão\r\n    2 cebolas grandes em rodelas\r\n    1 pimentão verde em rodelas\r\n    1 pimentão vermelho em rodelas\r\n    4 tomates maduros em rodelas\r\n    2 colheres (sopa) de coentro picado\r\n    1 vidro de leite de coco (200ml)\r\n    1 colher (sopa) de azeite-de-dendê\r\n\r\n', '\r\nEm um recipiente, tempere as postas de peixe com o MAGGI Fondor, o suco de limão e deixe tomar gosto, por cerca de 30 minutos, em geladeira.\r\n\r\nEm uma panela de fundo largo, arrume metade das cebolas, cubra com metade das postas de peixe, dos pimentões e dos tomates.\r\n\r\nPolvilhe um pouco de coentro, e repita as camadas, finalizando com o coentro.\r\n\r\nPolvilhe o coentro, tampe a panela e cozinhe em fogo'),
(54, 6, 'Pudim ', 'Pudim de Leite Condensado MOÇA ', '120', 'medio', '7', 'Calda\r\n    1 xícara (chá) de açúcar\r\n    meia xícara (chá) de água quente\r\nPudim\r\n    1 Leite MOÇA® (lata ou caixinha) 395 g\r\n    2 medidas (da lata) de Leite Líquido NINHO® Forti+ Integral (790 ml)\r\n    3 ovos\r\n\r\n', 'Em uma panela de fundo largo, derreta o açúcar até ficar dourado.\r\nJunte a água quente e mexa com uma colher.\r\nDeixe ferver até dissolver os torrões de açúcar e a calda engrossar.\r\nForre com a calda uma forma com furo central (19 cm de diâmetro) e reserve.\r\nPudim\r\nEm um liquidificador, bata todos os ingredientes do pudim e despeje na forma reservada.\r\nCubra com papel-alumínio e leve ao forno médio ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `receitas`
--
ALTER TABLE `receitas`
  ADD CONSTRAINT `FK` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id_categorias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
