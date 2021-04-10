-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Abr-2021 às 02:18
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u609173674_ofertasvitrine`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_admin.visitas`
--

INSERT INTO `tb_admin.visitas` (`id`, `ip`, `dia`) VALUES
(1, '::1', '2017-06-12'),
(2, '192.168.0.2', '2017-06-11'),
(3, '::1', '2017-06-13'),
(4, '::1', '2017-06-13'),
(5, '::1', '2017-06-13'),
(6, '::1', '2017-06-13'),
(7, '::1', '2017-06-14'),
(8, '::1', '2017-06-14'),
(9, '::1', '2017-06-16'),
(10, '::1', '2017-06-20'),
(11, '::1', '2017-06-20'),
(12, '::1', '2017-06-20'),
(13, '::1', '2017-06-20'),
(14, '::1', '2017-06-26'),
(15, '::1', '2021-01-06'),
(16, '::1', '2021-02-01'),
(17, '::1', '2021-02-01'),
(18, '::1', '2021-03-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(255) NOT NULL,
  `link_categoria` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `nome_categoria`, `link_categoria`, `icone`) VALUES
(92, 'Beleza e Perfumaria', 'categoria-belezaeperfumaria', 'fas fa-palette'),
(93, 'Pet Shop', 'categoria-petshop', 'fas fa-paw'),
(94, 'Computadores e Informática', 'categoria-computadoreseinform??tica', 'fas fa-laptop'),
(103, 'Automotivo', 'categoria-carros', 'fas fa-car'),
(104, 'Jogos', 'categoria-jogos', 'fas fa-gamepad'),
(105, 'Brinquedos', 'categoria-brinquedos', 'fas fa-baby'),
(107, 'Ferramentas', 'categoria-ferramentasemateriasdeconstru????o', 'fas fa-tools');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria_lojas`
--

CREATE TABLE `tb_categoria_lojas` (
  `id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `loja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_categoria_lojas`
--

INSERT INTO `tb_categoria_lojas` (`id`, `categoria`, `loja`) VALUES
(56, 92, 138),
(57, 92, 139),
(58, 92, 140),
(59, 92, 141),
(60, 92, 142),
(61, 93, 143),
(62, 94, 144);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curtidas`
--

CREATE TABLE `tb_curtidas` (
  `id_curtida` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_loja` int(11) NOT NULL,
  `curtidas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_lojas`
--

CREATE TABLE `tb_lojas` (
  `id` int(11) NOT NULL,
  `nome_loja` varchar(255) NOT NULL,
  `img_logo` varchar(255) NOT NULL,
  `link_loja` varchar(255) NOT NULL,
  `ranking` int(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `atendimento` varchar(255) NOT NULL,
  `sobre_paragrafo1` text NOT NULL,
  `sobre_paragrafo2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_lojas`
--

INSERT INTO `tb_lojas` (`id`, `nome_loja`, `img_logo`, `link_loja`, `ranking`, `telefone`, `site`, `email`, `instagram`, `facebook`, `atendimento`, `sobre_paragrafo1`, `sobre_paragrafo2`) VALUES
(138, 'Avon', '6064e37774e9e.png', 'avon-loja', 0, '21988467478', 'www.avon.com.br', 'contato@avon.com.br', 'avonbrasil', 'avonbr', 'Segunda a sexta das 8 às 18h.', 'sobre1', 'sobre 2'),
(139, 'Natura Cosmésticos', '6064d89e4c018.PNG', 'naturacosmesticos-loja', 0, '', '', '', '', '', '', 'O cão, no Brasil também chamado de cachorro, é um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano. Teorias postulam que surgiu do lobo cinzento no continente asiático há mais de 100 000 anos. O cão, no Brasil também chamado de cachorro, é um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano. Teorias postulam que surgiu do lobo cinzento no continente asiático há mais de 100 000 anos. O cão, no Brasil também chamado de cachorro, é um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano. Teorias postulam que surgiu do lobo cinzento no continente asiático há mais de 100 000 anos.', 'O cão, no Brasil também chamado de cachorro, é um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano. Teorias postulam que surgiu do lobo cinzento no continente asiático há mais de 100 000 anos. O cão, no Brasil também chamado de cachorro, é um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano. Teorias postulam que surgiu do lobo cinzento no continente asiático há mais de 100 000 anos.'),
(140, 'Quem disse, Berenice?', '6064d8a8c386a.png', 'quemdisse,berenice?-loja', 1, '', '', '', '', '', '', 'Sobre 1', 'Sobre 2'),
(141, 'O Boticário', '6064d8b34bee9.png', 'oboticario-loja', 0, '', '', '', '', '', '', '', ''),
(142, 'Boca Rosa', '6064d8bda8a69.png', 'bocarosa-loja', 0, '', '', '', '', '', '', '', ''),
(143, 'Portal do Pet Feliz', '6065c9cf31677.png', 'portaldopetfeliz-loja', 496, '', 'www.portaldopetfeliz.com.br/', 'contato@portaldopetfeliz.com.br', 'portaldopetfeliz/', 'portaldopetfeliz/', '24h', 'Somos apaixonados por pets. E estamos desenvolvendo o melhor e mais completo portal de informações e produtos para fazer seu pet feliz ;)\r\n', 'As melhores ofertas de produtos pet estão aqui!'),
(144, 'D-tech', '606619194160f.jpg', 'd-tech-loja', 0, '', '', '', '', '', '', 'Ofertas de Computadores e Informática', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ofertas`
--

CREATE TABLE `tb_ofertas` (
  `id` int(11) NOT NULL,
  `loja` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `de` varchar(11) NOT NULL,
  `por` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `loja` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `de` varchar(255) NOT NULL,
  `por` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `foto4` varchar(255) NOT NULL,
  `foto5` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `paragrafo1` text NOT NULL,
  `paragrafo2` text NOT NULL,
  `paragrafo3` text NOT NULL,
  `paragrafo4` text NOT NULL,
  `paragrafo5` text NOT NULL,
  `curtidas` int(11) NOT NULL,
  `link_site` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `produto`, `categoria`, `loja`, `foto`, `de`, `por`, `foto2`, `foto3`, `foto4`, `foto5`, `subtitulo`, `paragrafo1`, `paragrafo2`, `paragrafo3`, `paragrafo4`, `paragrafo5`, `curtidas`, `link_site`) VALUES
(58, 'Esmalte Verde', 89, 136, '60632edea255f.PNG', '8.25', '5.80', '60632edea3236.webp', '60632edea45d9.PNG', '60632edea4c70.webp', '60632edea6745.PNG', 'Frase de destaque', 'parágrafo 1', 'parágrafo 2', 'parágrafo 3', 'parágrafo 4', 'parágrafo 5', 26, ''),
(59, 'batom2', 89, 136, '', '12', '45', '', '', '', '', '', '', '', '', '', '', 10, ''),
(60, 'Esmalte Boca Rosa', 92, 138, '6064e77bd4aad.PNG', '50', '10.00', '6064e7ace7249.png', '6064e7ace7a69.PNG', '6064e7ace9b58.PNG', '6064e7acea351.webp', '', '', '', '', '', '', 8, ''),
(65, 'Brinquedo/escova mastigável para cães', 93, 143, '6065d59a0d9c7.PNG', '0', '0', '6066139bd44b0.PNG', '6066139bd4e9c.PNG', '6066139bda1c6.PNG', '', 'Brinquedo de limpeza de dentes de cães com som interativo que estimula a mastigação e limpeza dos dentes.', 'Brinquedo interativo molar - design convexo côncavo, com maior fricção nos dentes, o que ajuda a limpar cálculos e sujeira de forma eficaz.', 'Reduz o tédio e o comportamento destrutivo, mantendo o alerta físico do seu cão e cumprir seus instintos de caça! Ajuda a manter a saúde física e o foco do seu animal de estimação.', 'Mais interação: Este é um brinquedo que pode interagir melhor entre os animais de estimação e os proprietários, promover o relacionamento entre o animal de estimação e o proprietário. Dois cães interagem e brincam, a tensão forte e se divertem, melhoram a atividade física.', 'Este brinquedo é feito de material TPR ecológico e macio. Não tóxico, seguro e inofensivo para o seu amado animal de estimação. Pode suavemente moer os dentes sem arranhar o animal de estimação.', 'Com um dispositivo de som integrado, o brinquedo fará um som quando o animal de estimação morder, aumentando assim o interesse do animal de estimação no brinquedo.', 31, 'https://amzn.to/2PhKP9h'),
(66, 'Notebook SAMSUNG', 94, 144, '60661a920297c.PNG', '0', '0', '60661a92033f4.PNG', '60661a9203ff4.PNG', '60661a920c223.PNG', '60661a920cc42.PNG', 'SAMSUNG Chromebook SS 11.6 Intel DC 4GB 32GB XE310XBA-KT1BR', 'Sistema Operacional Chrome OS Processador Intel Celeron N4000 (1.10 GHz até 2.60 GHz, 4 MB L2 Cache) Placa de Vídeo Intel UHD Graphics 600', 'Tela Display LED HDs de 11.6\" (1366 x 768), antireflexiva Memória Memória de 4 GB LPDDR4 (4 GB onboard) Armazenamento 32 GB e.MMC', 'Multimídia Alto-falante estéreo (1,5 W x 2) Microfone digital interno Câmera HD de 720p', 'Rede 802,11 ac wave2 (2x2) Bluetooth', 'Portas de Comunicação 1 USB Tipo-C 1 USB 3.0 Leitor de cartões Micro-SD Audio combo', 0, 'https://amzn.to/3cHyWSC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.config`
--

CREATE TABLE `tb_site.config` (
  `titulo` varchar(255) NOT NULL,
  `nome_autor` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `icone1` varchar(255) NOT NULL,
  `descricao1` text NOT NULL,
  `icone2` varchar(255) NOT NULL,
  `descricao2` text NOT NULL,
  `icone3` varchar(255) NOT NULL,
  `descricao3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.config`
--

INSERT INTO `tb_site.config` (`titulo`, `nome_autor`, `descricao`, `icone1`, `descricao1`, `icone2`, `descricao2`, `icone3`, `descricao3`) VALUES
('Projeto editado', 'Guilherme', 'descricao do autor', 'fa fa-css3', 'descricao css3', 'fa fa-html5', 'descricao html5', 'fa fa-gg-circle', 'descricao javascript');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.depoimentos`
--

CREATE TABLE `tb_site.depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `data`, `order_id`) VALUES
(8, 'Guilherme', 'Olá, funcionando', '19/09/2019', 11),
(9, 'João', 'Olá, funcionando', '19/09/2019', 10),
(10, 'Mario', 'Depoimento', '19/09/2019', 9),
(11, 'Outro', 'Ok', '19/08/2016', 8),
(12, 'Guilherme Grillo', 'Depoimento de teste', '25/05/1993', 12),
(13, 'Joao', 'outro depoimento editado', '25/05/1993', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.servicos`
--

CREATE TABLE `tb_site.servicos` (
  `id` int(11) NOT NULL,
  `servico` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.servicos`
--

INSERT INTO `tb_site.servicos` (`id`, `servico`, `order_id`) VALUES
(4, 'Meu serviço #1', 4),
(5, 'Meu serviço #2 EDITADO novamente', 6),
(6, 'Meu serviço #3 EDITADO NOVAMENTE NOVAMENTE', 7),
(7, 'Meu servico #4', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_site.slides`
--

CREATE TABLE `tb_site.slides` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `slide` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_site.slides`
--

INSERT INTO `tb_site.slides` (`id`, `nome`, `slide`, `order_id`) VALUES
(8, 'Imagem de teste', '594d4e65b16be.jpg', 8),
(9, 'Meu slide', '594d4ec5ad5dd.jpg', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_slides`
--

CREATE TABLE `tb_slides` (
  `id_slide` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `id_loja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_slides`
--

INSERT INTO `tb_slides` (`id_slide`, `imagem`, `id_loja`) VALUES
(5, '60634e92b31cb.PNG', 137),
(6, '6065dadde2baa.PNG', 138),
(7, '6065db0956151.PNG', 142),
(8, '6065ff4793ab7.PNG', 138);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(1) NOT NULL,
  `loja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`, `loja`) VALUES
(1, 'admin', 'admin', '604a0a7e3179b.jpg', 'Doni Almeida', 2, '0'),
(11, 'drbarp@hotmail.com', 'padrao', '605c9af7d0936.jpg', 'Diego Rossi Barp', 1, '0'),
(12, 'dkralmeida@gmail.com', 'padrao', '605df83da8924.png', 'Doni Almeida', 1, '128');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_loja`
--

CREATE TABLE `tb_usuario_loja` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_loja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_categoria_lojas`
--
ALTER TABLE `tb_categoria_lojas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_curtidas`
--
ALTER TABLE `tb_curtidas`
  ADD PRIMARY KEY (`id_curtida`);

--
-- Índices para tabela `tb_lojas`
--
ALTER TABLE `tb_lojas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_ofertas`
--
ALTER TABLE `tb_ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_slides`
--
ALTER TABLE `tb_slides`
  ADD PRIMARY KEY (`id_slide`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de tabela `tb_categoria_lojas`
--
ALTER TABLE `tb_categoria_lojas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `tb_curtidas`
--
ALTER TABLE `tb_curtidas`
  MODIFY `id_curtida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_lojas`
--
ALTER TABLE `tb_lojas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de tabela `tb_ofertas`
--
ALTER TABLE `tb_ofertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_slides`
--
ALTER TABLE `tb_slides`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
